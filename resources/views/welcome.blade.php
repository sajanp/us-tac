<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'COS Systems') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#080c14] min-h-screen flex items-center justify-center">
        <div class="text-center">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-20 h-20 mx-auto mb-10">

            <form method="POST" action="{{ route('access.check') }}" class="flex flex-col items-center gap-4">
                @csrf
                <input
                    type="password"
                    name="password"
                    placeholder="Enter access code"
                    autofocus
                    class="w-64 px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white text-center text-sm tracking-widest placeholder:text-white/20 focus:outline-none focus:border-[#11C18F]/50 focus:ring-1 focus:ring-[#11C18F]/30 transition-colors"
                />

                <button type="submit" class="w-64 px-6 py-2.5 bg-[#11C18F] text-white text-sm font-semibold rounded-lg hover:bg-[#0ea87d] transition-colors cursor-pointer">
                    Enter
                </button>

                @if(session('error'))
                    <p class="text-red-400/80 text-xs mt-1">{{ session('error') }}</p>
                @endif
            </form>
        </div>
    </body>
</html>
