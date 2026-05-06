<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
        <!-- Importando tailwind - el framwork para css-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Asset ubica la ruta -->
    <link rel="icon" type="image/svg+xml" href="{{asset('logo.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <header class="xl:flex xl:justify-around bg-[#52616B] text-white xl:py-5">
        <div class="flex justify-center items-center">
            <h1 class="xl:text-2xl">EcoSauld</h1>
        </div>
        <div class="xl:flex xl:gap-4">
            <a class="bg-[#2f3f43]  xl:px-3 xl:py-2 xl:rounded-xl hover:bg-[#6b878d] hover:cursor-pointer" href="{{ route('inicio') }}">Inicio</a>
            <a class="bg-[#2f3f43] xl:px-3 xl:py-2 rounded-xl hover:bg-[#6b878d] hover:cursor-pointer" href="{{route('reportes')}}">Reportes</a>
            <a class="bg-[#2f3f43] xl:px-3 xl:py-2 xl:rounded-xl hover:bg-[#6b878d] hover:cursor-pointer" href="{{route('soporteAyuda')}}">Soporte y ayuda</a>
        </div>
        <a type="button" class="flex justify-center items-center hover:cursor-pointer" href="{{route('login')}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="xl:size-8 xl:hover:scale-x-110">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
        </a>
    </header>
</body>
</html>