<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'COS Systems') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#242A36] min-h-screen flex items-center justify-center">
        <div class="text-center">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-24 h-24 mx-auto mb-8">
            <a href="{{ route('presentations.index') }}" class="inline-block px-8 py-3 bg-[#11C18F] text-white font-semibold rounded-lg hover:bg-[#0ea87d] transition-colors">
                Presentations
            </a>
        </div>
    </body>
</html>
