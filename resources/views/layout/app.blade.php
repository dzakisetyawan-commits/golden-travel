<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <nav class="bg-white/10 backdrop-blur-md border border-white/25 fixed z-50 w-full top-0 left-0 flex flex-row justify-between px-10 py-4 items-center">
        <p class="text-black font-bold">LOGO</p>

        <div class="flex flex-row gap-6 items-center">
            <ul class="font-jakarta flex flex-row gap-6 text-black" >
                <li><a class="cursor-pointer relative inline-block font-medium after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:w-full after:h-0.5 after:bg-black after:-translate-x-1/2 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 after:ease-out">Destinasi</a></li>
                <li><a class="cursor-pointer relative inline-block font-medium after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:w-full after:h-0.5 after:bg-black after:-translate-x-1/2 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 after:ease-out">Paket</a></li>
                <li><a class="cursor-pointer relative inline-block font-medium after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:w-full after:h-0.5 after:bg-black after:-translate-x-1/2 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 after:ease-out">Tentang</a></li>
                <li><a class="cursor-pointer relative inline-block font-medium after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:w-full after:h-0.5 after:bg-black after:-translate-x-1/2 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 after:ease-out">Galeri</a></li>
            </ul>

            <x-g-button>
                Kontak
            </x-g-button>
        </div>
    </nav>
    @yield('content')
</body>
</html>