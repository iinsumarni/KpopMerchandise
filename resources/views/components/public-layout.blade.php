<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Kpop Pocket') }} - High Energy Merch</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;700;800;900&family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-on-background font-body-md antialiased selection:bg-primary-container selection:text-white">

    <x-public-nav />

    {{ $slot }}

    <x-public-footer />

</body>
</html>
