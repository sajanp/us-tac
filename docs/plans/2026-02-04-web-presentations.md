# Web-Based Presentations Implementation Plan

> **For Claude:** REQUIRED SUB-SKILL: Use superpowers:executing-plans to implement this plan task-by-task.

**Goal:** Build a convention-based presentation system where slides are Blade views auto-discovered from the filesystem.

**Architecture:** Controller scans `resources/views/presentations/` for folders (presentations) and numbered Blade files (slides). Each presentation can have its own layout or fall back to a default. Navigation via clickable buttons and keyboard arrows.

**Tech Stack:** Laravel 12, Blade, Tailwind CSS 4, Vite

---

### Task 1: Create PresentationController with Filesystem Discovery

**Files:**
- Create: `app/Http/Controllers/PresentationController.php`
- Create: `tests/Feature/PresentationControllerTest.php`

**Step 1: Write the failing test for index**

```php
<?php

use function Pest\Laravel\get;

it('lists presentations from filesystem', function () {
    // Create test presentation directory structure
    $viewPath = resource_path('views/presentations/test-presentation');
    if (!is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath . '/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations')
        ->assertOk()
        ->assertSee('Test Presentation');

    // Cleanup
    unlink($viewPath . '/01-intro.blade.php');
    rmdir($viewPath);
});
```

**Step 2: Run test to verify it fails**

Run: `php artisan test --filter="lists presentations"`
Expected: FAIL (route not defined)

**Step 3: Write the controller**

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PresentationController extends Controller
{
    private string $presentationsPath;

    public function __construct()
    {
        $this->presentationsPath = resource_path('views/presentations');
    }

    public function index(): View
    {
        $presentations = $this->discoverPresentations();

        return view('presentations.index', compact('presentations'));
    }

    public function show(string $presentation): RedirectResponse
    {
        $this->validatePresentation($presentation);

        return redirect()->route('presentations.slide', [
            'presentation' => $presentation,
            'slide' => 1,
        ]);
    }

    public function slide(string $presentation, int $slide): View
    {
        $this->validatePresentation($presentation);
        $slides = $this->discoverSlides($presentation);

        if ($slide < 1 || $slide > count($slides)) {
            throw new NotFoundHttpException('Slide not found');
        }

        $slideFile = $slides[$slide - 1];
        $slideView = "presentations.{$presentation}." . pathinfo($slideFile, PATHINFO_FILENAME);
        $layoutView = $this->getLayoutView($presentation);

        $data = [
            'presentationSlug' => $presentation,
            'presentationTitle' => $this->formatTitle($presentation),
            'currentSlide' => $slide,
            'totalSlides' => count($slides),
            'prevSlide' => $slide > 1 ? route('presentations.slide', [$presentation, $slide - 1]) : null,
            'nextSlide' => $slide < count($slides) ? route('presentations.slide', [$presentation, $slide + 1]) : null,
        ];

        $content = view($slideView, $data)->render();

        return view($layoutView, array_merge($data, ['slot' => $content]));
    }

    private function discoverPresentations(): array
    {
        if (!is_dir($this->presentationsPath)) {
            return [];
        }

        $directories = File::directories($this->presentationsPath);

        return collect($directories)
            ->map(fn (string $dir) => basename($dir))
            ->filter(fn (string $name) => count($this->discoverSlides($name)) > 0)
            ->map(fn (string $slug) => [
                'slug' => $slug,
                'title' => $this->formatTitle($slug),
                'slideCount' => count($this->discoverSlides($slug)),
            ])
            ->values()
            ->all();
    }

    private function discoverSlides(string $presentation): array
    {
        $path = "{$this->presentationsPath}/{$presentation}";

        if (!is_dir($path)) {
            return [];
        }

        return collect(File::files($path))
            ->map(fn ($file) => $file->getFilename())
            ->filter(fn (string $name) => preg_match('/^\d+-.*\.blade\.php$/', $name))
            ->filter(fn (string $name) => $name !== 'layout.blade.php')
            ->sort(fn ($a, $b) => (int) $a <=> (int) $b)
            ->values()
            ->all();
    }

    private function getLayoutView(string $presentation): string
    {
        $customLayout = "{$this->presentationsPath}/{$presentation}/layout.blade.php";

        if (file_exists($customLayout)) {
            return "presentations.{$presentation}.layout";
        }

        return 'layouts.presentation';
    }

    private function formatTitle(string $slug): string
    {
        return Str::of($slug)
            ->replace('-', ' ')
            ->title()
            ->toString();
    }

    private function validatePresentation(string $presentation): void
    {
        $path = "{$this->presentationsPath}/{$presentation}";

        if (!is_dir($path) || count($this->discoverSlides($presentation)) === 0) {
            throw new NotFoundHttpException('Presentation not found');
        }
    }
}
```

**Step 4: Add routes**

Add to `routes/web.php`:

```php
use App\Http\Controllers\PresentationController;

Route::get('/presentations', [PresentationController::class, 'index'])
    ->name('presentations.index');
Route::get('/presentations/{presentation}', [PresentationController::class, 'show'])
    ->name('presentations.show');
Route::get('/presentations/{presentation}/{slide}', [PresentationController::class, 'slide'])
    ->where('slide', '[0-9]+')
    ->name('presentations.slide');
```

**Step 5: Run test to verify it fails (needs views)**

Run: `php artisan test --filter="lists presentations"`
Expected: FAIL (view not found)

---

### Task 2: Create Index View

**Files:**
- Create: `resources/views/presentations/index.blade.php`

**Step 1: Create the index view**

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentations</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#242A36] text-white min-h-screen">
    <div class="max-w-4xl mx-auto py-16 px-4">
        <h1 class="text-4xl font-bold mb-12">
            <span class="text-[#11C18F]">Presentations</span>
        </h1>

        @if(count($presentations) === 0)
            <p class="text-gray-400">No presentations found.</p>
        @else
            <div class="grid gap-4">
                @foreach($presentations as $presentation)
                    <a href="{{ route('presentations.show', $presentation['slug']) }}"
                       class="block p-6 bg-[#10141F] rounded-lg hover:bg-[#1a1f2e] transition-colors border border-gray-700 hover:border-[#11C18F]">
                        <h2 class="text-2xl font-semibold text-white">{{ $presentation['title'] }}</h2>
                        <p class="text-gray-400 mt-2">{{ $presentation['slideCount'] }} slides</p>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
```

**Step 2: Run test to verify it passes**

Run: `php artisan test --filter="lists presentations"`
Expected: PASS

---

### Task 3: Create Default Presentation Layout

**Files:**
- Create: `resources/views/layouts/presentation.blade.php`
- Add to: `tests/Feature/PresentationControllerTest.php`

**Step 1: Write failing test for slide rendering**

Add to test file:

```php
it('renders a slide with navigation', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (!is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath . '/01-intro.blade.php', '<div>Slide 1 Content</div>');
    file_put_contents($viewPath . '/02-details.blade.php', '<div>Slide 2 Content</div>');

    get('/presentations/test-presentation/1')
        ->assertOk()
        ->assertSee('Slide 1 Content')
        ->assertSee('1 / 2')
        ->assertSee('Next');

    // Cleanup
    unlink($viewPath . '/01-intro.blade.php');
    unlink($viewPath . '/02-details.blade.php');
    rmdir($viewPath);
});
```

**Step 2: Run test to verify it fails**

Run: `php artisan test --filter="renders a slide"`
Expected: FAIL (layout view not found)

**Step 3: Create default presentation layout**

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $presentationTitle }} - Slide {{ $currentSlide }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-[#242A36] text-white min-h-screen">
    <main class="min-h-screen">
        {!! $slot !!}
    </main>

    <nav class="fixed bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-6 bg-[#10141F]/90 backdrop-blur px-6 py-3 rounded-full border border-gray-700">
        @if($prevSlide)
            <a href="{{ $prevSlide }}" class="text-gray-300 hover:text-[#11C18F] transition-colors" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        @else
            <span class="text-gray-600 w-6"></span>
        @endif

        <span class="text-gray-400 font-mono text-sm min-w-[60px] text-center">
            {{ $currentSlide }} / {{ $totalSlides }}
        </span>

        @if($nextSlide)
            <a href="{{ $nextSlide }}" class="text-gray-300 hover:text-[#11C18F] transition-colors" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        @else
            <span class="text-gray-600 w-6"></span>
        @endif
    </nav>

    <script>
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft' && @json($prevSlide)) {
                window.location.href = @json($prevSlide);
            }
            if (e.key === 'ArrowRight' && @json($nextSlide)) {
                window.location.href = @json($nextSlide);
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
```

**Step 4: Run test to verify it passes**

Run: `php artisan test --filter="renders a slide"`
Expected: PASS

---

### Task 4: Add Edge Case Tests

**Files:**
- Add to: `tests/Feature/PresentationControllerTest.php`

**Step 1: Add edge case tests**

```php
it('redirects presentation root to slide 1', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (!is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath . '/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations/test-presentation')
        ->assertRedirect('/presentations/test-presentation/1');

    // Cleanup
    unlink($viewPath . '/01-intro.blade.php');
    rmdir($viewPath);
});

it('returns 404 for invalid presentation', function () {
    get('/presentations/nonexistent-presentation')
        ->assertNotFound();
});

it('returns 404 for invalid slide number', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (!is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath . '/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations/test-presentation/99')
        ->assertNotFound();

    // Cleanup
    unlink($viewPath . '/01-intro.blade.php');
    rmdir($viewPath);
});

it('returns 404 for slide 0', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (!is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath . '/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations/test-presentation/0')
        ->assertNotFound();

    // Cleanup
    unlink($viewPath . '/01-intro.blade.php');
    rmdir($viewPath);
});
```

**Step 2: Run all tests**

Run: `php artisan test --filter=Presentation`
Expected: All PASS

---

### Task 5: Create Example Presentation

**Files:**
- Create: `resources/views/presentations/example/01-welcome.blade.php`
- Create: `resources/views/presentations/example/02-features.blade.php`
- Create: `resources/views/presentations/example/03-end.blade.php`

**Step 1: Create example slides**

`01-welcome.blade.php`:
```blade
<div class="flex flex-col items-center justify-center min-h-screen px-8">
    <h1 class="text-6xl font-bold text-center">
        Welcome to <span class="text-[#11C18F]">Web Presentations</span>
    </h1>
    <p class="text-2xl text-gray-400 mt-8">Use arrow keys or buttons to navigate</p>
</div>
```

`02-features.blade.php`:
```blade
<div class="flex flex-col items-center justify-center min-h-screen px-8">
    <h2 class="text-5xl font-bold mb-12 text-[#11C18F]">Features</h2>
    <ul class="text-2xl space-y-6 text-gray-300">
        <li>Full CSS control per slide</li>
        <li>Keyboard navigation</li>
        <li>Custom layouts per presentation</li>
        <li>Convention-based discovery</li>
    </ul>
</div>
```

`03-end.blade.php`:
```blade
<div class="flex flex-col items-center justify-center min-h-screen px-8">
    <h2 class="text-6xl font-bold text-center">
        <span class="text-[#11C18F]">Thank You</span>
    </h2>
    <p class="text-2xl text-gray-400 mt-8">Now go create your own presentations!</p>
</div>
```

**Step 2: Verify manually**

Run: `npm run build` (if needed)
Visit: `/presentations` and click through the example

---

### Task 6: Run Pint and Final Verification

**Step 1: Run Pint**

Run: `vendor/bin/pint --dirty`

**Step 2: Run all tests**

Run: `php artisan test`
Expected: All PASS

---

## Summary of Files Created

1. `app/Http/Controllers/PresentationController.php` - Main controller
2. `resources/views/presentations/index.blade.php` - Index listing
3. `resources/views/layouts/presentation.blade.php` - Default slide layout
4. `resources/views/presentations/example/01-welcome.blade.php` - Example slide
5. `resources/views/presentations/example/02-features.blade.php` - Example slide
6. `resources/views/presentations/example/03-end.blade.php` - Example slide
7. `tests/Feature/PresentationControllerTest.php` - Feature tests
8. Routes added to `routes/web.php`
