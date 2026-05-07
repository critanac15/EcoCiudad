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
<body class="font-light">
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
    <main>
        <div class="xl:py-15">
            <h2 class=" text-center xl:text-4xl xl:font-light xl:mb-10">¿Quienes somos?</h2>
            <div class="xl:grid xl:grid-cols-2 xl:gap-5 xl:mx-10 ">
                <div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat quia voluptates aliquam aliquid, facere molestiae perferendis. Rerum nisi nulla nesciunt deleniti fuga necessitatibus culpa sint! Corrupti, voluptatem, ullam laboriosam quis possimus magni neque, pariatur temporibus soluta tempora fugiat maxime quidem labore repellat iste itaque odio veritatis aliquam voluptas amet eveniet vero laborum. Alias ad accusamus tenetur exercitationem repellat in culpa debitis odit facilis? Ratione aspernatur unde voluptate quas iste in! Quos praesentium officiis optio, dicta corporis expedita enim reiciendis pariatur inventore repellendus architecto, saepe incidunt dignissimos non. Natus officia quos nihil, sequi, ex totam provident, asperiores maxime porro nisi vitae.</p>
                </div>
                <figure class="flex justify-center items-center">
                    <img src="https://imgs.search.brave.com/mRmPVxGAVEDCND9SCUIJdGUO2XycyBU4w2AvOBvghAw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTEz/OTg1OTI3OS9lcy9m/b3RvL3RlY25vbG9n/JUMzJUFEYS1kZS1y/ZWNvbm9jaW1pZW50/by1mYWNpYWwuanBn/P3M9NjEyeDYxMiZ3/PTAmaz0yMCZjPW5Y/TlZkdXF3N1h1Ulc1/QnFzUkx1SUhmZWlo/eEVQbHlHUkh2Nlpv/OWhEclE9" alt="">
                </figure>
            </div>

        </div>
        <div class="xl:my-15">
            <h2 class="text-center xl:text-4xl xl:font-light xl:my-10">Municipalidades de Arequipa</h2>
            <div class="carousel w-full">
                <div id="item1" class="carousel-item w-full">
                    <img
                    src="https://imgs.search.brave.com/5duH3V6QYas9AMP_vhUyvd_NKsVODVZpJeQDxhMPJ_E/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9kaWFy/aW9jb3JyZW8ucGUv/cmVzaXplci92Mi81/MldOWEhWNFdGR0hQ/SFBVREZLS0xSQUhK/TS5qcGc_YXV0aD0x/ZmM5ZWUyZmRhZWVi/ZjA5NmY1ODA3Y2Ex/NzU1N2IxYWVjMzA3/Njg2OTgzNTNiMDBl/YjI4OGFjMTAyYzFh/ODU5JndpZHRoPTEy/MDAmaGVpZ2h0PTY3/NiZxdWFsaXR5PTc1/JnNtYXJ0PXRydWU"
                    class="w-full" />
                </div>
                <div id="item2" class="carousel-item w-full">
                    <img
                    src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                    class="w-full" />
                </div>
                <div id="item3" class="carousel-item w-full">
                    <img
                    src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                    class="w-full" />
                </div>
                <div id="item4" class="carousel-item w-full">
                    <img
                    src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                    class="w-full" />
                </div>
                </div>
                <div class="flex w-full justify-center gap-2 py-2">
                <a href="#item1" class="btn btn-xs">1</a>
                <a href="#item2" class="btn btn-xs">2</a>
                <a href="#item3" class="btn btn-xs">3</a>
                <a href="#item4" class="btn btn-xs">4</a>
            </div>
        </div>
    </main>
    <footer class="bg-black flex justify-center text-white xl:py-10">
        <p><code class="">EcoSalud S.A.C.  |  Cel:98754625   |   Arequipa-Peru   |  Calle San Camilo Av-54, L8</code></p>
    </footer>
</body>
</html>