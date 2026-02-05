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
