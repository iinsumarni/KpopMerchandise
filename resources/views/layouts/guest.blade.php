<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Kpop Pocket') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        
        <style>
            body { font-family: 'Inter', sans-serif; background: #1D1014; color: #FFFFFF; }
            .glass-card {
                background: rgba(255, 255, 255, 0.04);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.08);
                box-shadow: 0 20px 60px rgba(0,0,0,0.4);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden">
            <!-- Background glow -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(255,46,147,0.1), transparent 70%); filter: blur(80px);"></div>

            <div class="relative z-10 mb-8">
                <a href="/" class="text-4xl bg-gradient-to-r from-[#FF2E93] to-[#FF5DB1] bg-clip-text text-transparent select-none pb-1" style="font-family: 'Pacifico', cursive;">
                    Kpop Pocket
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-10 glass-card overflow-hidden sm:rounded-[28px] relative z-10">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
