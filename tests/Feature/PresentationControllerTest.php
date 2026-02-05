<?php

use function Pest\Laravel\get;

it('lists presentations from filesystem', function () {
    // Create test presentation directory structure
    $viewPath = resource_path('views/presentations/test-presentation');
    if (! is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath.'/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations')
        ->assertOk()
        ->assertSee('Test Presentation');

    // Cleanup
    unlink($viewPath.'/01-intro.blade.php');
    rmdir($viewPath);
});

it('renders a slide with navigation', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (! is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath.'/01-intro.blade.php', '<div>Slide 1 Content</div>');
    file_put_contents($viewPath.'/02-details.blade.php', '<div>Slide 2 Content</div>');

    get('/presentations/test-presentation/1')
        ->assertOk()
        ->assertSee('Slide 1 Content')
        ->assertSee('1 / 2')
        ->assertSee('Next');

    // Cleanup
    unlink($viewPath.'/01-intro.blade.php');
    unlink($viewPath.'/02-details.blade.php');
    rmdir($viewPath);
});

it('redirects presentation root to slide 1', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (! is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath.'/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations/test-presentation')
        ->assertRedirect('/presentations/test-presentation/1');

    // Cleanup
    unlink($viewPath.'/01-intro.blade.php');
    rmdir($viewPath);
});

it('returns 404 for invalid presentation', function () {
    get('/presentations/nonexistent-presentation')
        ->assertNotFound();
});

it('returns 404 for invalid slide number', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (! is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath.'/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations/test-presentation/99')
        ->assertNotFound();

    // Cleanup
    unlink($viewPath.'/01-intro.blade.php');
    rmdir($viewPath);
});

it('returns 404 for slide 0', function () {
    $viewPath = resource_path('views/presentations/test-presentation');
    if (! is_dir($viewPath)) {
        mkdir($viewPath, 0755, true);
    }
    file_put_contents($viewPath.'/01-intro.blade.php', '<div>Intro</div>');

    get('/presentations/test-presentation/0')
        ->assertNotFound();

    // Cleanup
    unlink($viewPath.'/01-intro.blade.php');
    rmdir($viewPath);
});
