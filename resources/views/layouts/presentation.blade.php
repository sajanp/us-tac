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

    <nav class="fixed bottom-4 left-4 flex items-center gap-3 bg-[#10141F]/70 backdrop-blur-sm px-3 py-1.5 rounded-full border border-gray-700/50 opacity-40 hover:opacity-100 transition-opacity">
        @if($prevSlide)
            <a href="{{ $prevSlide }}" class="text-gray-400 hover:text-[#11C18F] transition-colors" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        @else
            <span class="text-gray-600 w-3.5"></span>
        @endif

        <span class="text-gray-500 font-mono text-xs min-w-[40px] text-center">
            {{ $currentSlide }}/{{ $totalSlides }}
        </span>

        @if($nextSlide)
            <a href="{{ $nextSlide }}" class="text-gray-400 hover:text-[#11C18F] transition-colors" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        @else
            <span class="text-gray-600 w-3.5"></span>
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
