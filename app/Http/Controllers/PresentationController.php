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
        $slideView = "presentations.{$presentation}.".str_replace('.blade.php', '', $slideFile);
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

    /**
     * @return array<int, array{slug: string, title: string, slideCount: int}>
     */
    private function discoverPresentations(): array
    {
        if (! is_dir($this->presentationsPath)) {
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

    /**
     * @return array<int, string>
     */
    private function discoverSlides(string $presentation): array
    {
        $path = "{$this->presentationsPath}/{$presentation}";

        if (! is_dir($path)) {
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

        if (! is_dir($path) || count($this->discoverSlides($presentation)) === 0) {
            throw new NotFoundHttpException('Presentation not found');
        }
    }
}
