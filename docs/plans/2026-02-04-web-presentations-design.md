# Web-Based Presentations System Design

## Overview

A convention-based presentation system where each "slide" is a Blade view, giving complete control over layout and CSS. Presentations are auto-discovered from the filesystem with no configuration needed.

## Folder Structure & Conventions

```
resources/views/presentations/
├── fiber-economics/
│   ├── layout.blade.php          # Optional, presentation-specific layout
│   ├── 01-intro.blade.php
│   ├── 02-market-overview.blade.php
│   └── 03-conclusion.blade.php
├── tac-lockdown-features/
│   ├── 01-welcome.blade.php      # No layout = uses default
│   ├── 02-demo.blade.php
│   └── 03-roadmap.blade.php
```

**Discovery rules:**
- Each subfolder in `presentations/` is a presentation
- Files matching `##-*.blade.php` are slides (sorted by numeric prefix)
- `layout.blade.php` is reserved for the presentation layout (not a slide)
- Presentation title derived from folder name: `fiber-economics` → "Fiber Economics"

## URL Structure

| URL | Behavior |
|-----|----------|
| `/presentations` | Index page listing all presentations |
| `/presentations/fiber-economics` | Redirects to slide 1 |
| `/presentations/fiber-economics/1` | First slide |
| `/presentations/fiber-economics/2` | Second slide |

## Routes

```php
Route::get('/presentations', [PresentationController::class, 'index'])
    ->name('presentations.index');
Route::get('/presentations/{presentation}', [PresentationController::class, 'show'])
    ->name('presentations.show');
Route::get('/presentations/{presentation}/{slide}', [PresentationController::class, 'slide'])
    ->name('presentations.slide');
```

## Controller Logic

**PresentationController:**
- `index()` — Scans `resources/views/presentations/` for folders, returns list with derived titles
- `show($presentation)` — Redirects to slide 1
- `slide($presentation, $slide)` — Validates slide exists, determines layout, renders slide within layout

## Layouts

**Default layout** at `resources/views/layouts/presentation.blade.php`:
- Receives variables: `$presentationTitle`, `$currentSlide`, `$totalSlides`, `$prevSlide`, `$nextSlide`, `$presentationSlug`
- Includes nav buttons (prev/next) fixed at bottom center
- Includes keyboard navigation (left/right arrow keys)
- Uses COS brand colors as defaults (dark navy background, green accents)

**Presentation-specific layout:**
- Place `layout.blade.php` in the presentation folder to override
- Receives same variables as default layout
- Full control over HTML structure

## Slide Files

Slides are content fragments — no `@extends` needed:

```blade
<div class="flex items-center justify-center min-h-screen">
    <h1 class="text-6xl font-bold">
        <span class="text-[#11C18F]">Fiber Economics</span> Deep Dive
    </h1>
</div>

@push('styles')
<style>
    /* Slide-specific CSS */
</style>
@endpush
```

## Navigation

**Clickable buttons:** Prev/Next at bottom of screen with slide counter (e.g., "3 / 12")

**Keyboard:** Left arrow = previous, Right arrow = next

## Edge Cases

- Invalid slide number → 404
- Invalid presentation slug → 404
- Slide 0 or negative → 404
- Empty presentation folder → Not listed on index

## Files to Create

1. `app/Http/Controllers/PresentationController.php`
2. `resources/views/layouts/presentation.blade.php` (default layout)
3. `resources/views/presentations/index.blade.php` (index page)
4. `resources/views/presentations/` directory
5. Routes in `routes/web.php`
