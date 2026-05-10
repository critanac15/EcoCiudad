<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoCiudad</title>
    <!-- Importando tailwind - el framwork para css-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Asset ubica la ruta -->
    <link rel="icon" type="image/svg+xml" href="{{asset('logo.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header class="xl:grid xl:grid-cols-7 bg-[#021802] text-white xl:py-5">
        <div class="xl:flex xl:justify-center xl:items-center ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-9">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
            </svg>

            <h1 class="xl:text-2xl">EcoCiudad</h1>
        </div>
        <nav class="xl:flex xl:gap-4 xl:col-span-5 justify-center xl:text-lg">
            <a class="  xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-115 hover:outline-[#6b878d] hover:cursor-pointer" href="{{ route('inicio') }} ">Inicio</a>
            <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-115 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('reportes')}}">Reportes</a>
            <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-115 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('soporteAyuda')}}">Soporte / ayuda</a>
        </nav>
        <nav class="xl:flex xl:gap-2 items-center ">
            <a href="{{route('login')}}" class="bg-[#01c04d] xl:px-6 xl:py-2 xl:rounded-sm text-black hover:bg-[#4bdf3e] hover:cursor-pointer duration-150 hover:scale-105">Registrarse  </a>
            <a href="" class="bg-[#cacaca] xl:px-6 xl:py-2 xl:rounded-sm text-black hover:bg-[#e1e1e1] hover:cursor-pointer duration-150 hover:scale-105">Ingresar</a>
        </nav>
        
    </header>
    <!-- CONTENEDOR DE TARJETAS (GRID) -->
    <!-- Se aplica un sistema de rejilla: 1 columna en móvil y 3 columnas en pantallas medianas (md) en adelante -->
    
<main class="p-10">
    <h2 class="text-3xl mb-6">Listado de Reportes</h2>
    <form action="{{route('reportes')}}" method="GET" class="flex gap-4 mb-10">
        <input type="text" name="username" placeholder="Buscar por usuario" class="input input-bordered w-full max-w-xs"/>
        <input type="date" name="date" class="input input-bordered">
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($reports as $report)
        <div class="card bg-base-100 shadow-xl">
            <figure>
                <img src="{{ asset('storage/' . $report->image_path) }}" alt="Reporte" />
            </figure>

            <div class="card-body">
                <h2 class="card-title">{{ $report->username }}</h2>

                <p>{{ $report->comment }}</p>

                <div class="card-actions justify-end">
                    <div class="badge badge-outline">{{ $report->report_date }}</div>
                </div>
            </div>
        </div>
        @endforeach <!-- Fin del ciclo -->
    </div>
</main>


</body>

</html>