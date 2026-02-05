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
