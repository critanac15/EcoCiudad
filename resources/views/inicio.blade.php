<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>EcoCiudad</title>
    <!-- Importando tailwind - el framwork para css-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Asset ubica la ruta -->
    <link rel="icon" type="image/svg+xml" href="{{asset('logo.svg')}}">

    <!--Importando enlaces  para la fuente de letra de google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body class="font-light">

    <header class=" bg-[#000000] text-white xl:py-5 py-2 xl:px-40 px-4">
        <div class="xl:hidden  grid grid-cols-3">
            <div class="flex justify-start items-center col-span-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                </svg>

                <h1 class="xl:text-2xl xl:block text-white">EcoCiudad</h1>
            </div>
            <div class="relative flex justify-end p-1">
                <div class="relative">
                    <button id="menu-btn" aria-expanded="false" class="flex h-11 w-11 items-center justify-center rounded-xl bg-black text-white shadow-md  active:bg-gray-800 focus:outline-none  transition-colors">
                        <span class="sr-only">Abrir menú</span>
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <div id="menu-panel" class="hidden absolute right-0 mt-1 w-48 origin-top-right rounded-xl bg-white py-2 shadow-lg ring-1 ring-black/5 focus:outline-none z-50">
                        <a href="{{ route('inicio') }} " class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Inicio</a>
                        <a href="{{ route('reportes') }} " class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Reportes</a>
                        <a href="{{ route('soporteAyuda') }} " class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Soporte / ayuda</a>
                        <a href="{{ route('contacto') }} " class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Contacto</a>

                        <div class="my-1 border-t-2 border-gray-100"></div>

                        @if (Route::has('login'))
                        <nav class="items-center justify-end gap-4">
                            @auth
                            <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 hover:text-gray-900 transition-colors"> Perfil
                            </a>
                            @else

                            <a href="{{route('loginUser')}}" class="block px-4 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 hover:text-gray-900 transition-colors">Ingresar</a>

                            @if (Route::has('registro'))

                            <a href="{{route('registro')}}" class="block px-4 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 hover:text-gray-900 transition-colors">Registrarse </a>
                            @endif
                            @endauth
                        </nav>
                        @endif
                    </div>

                </div>
            </div>

        </div>
        <div id="menuXL" class=" hidden col-span-7 xl:grid grid-cols-7">
            <div class="xl:flex xl:justify-start xl:items-center  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-9 size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                </svg>

                <h1 class="xl:text-2xl hidden xl:block">EcoCiudad</h1>
            </div>
            <nav class="xl:flex xl:gap-4 xl:col-span-5 col-span-4 justify-center xl:text-lg">
                <a class="  xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{ route('inicio') }} ">Inicio</a>
                <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('reportes')}}">Reportes</a>
                <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('soporteAyuda')}}">Soporte / ayuda</a>
                <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('contacto')}}">Contacto</a>
            </nav>
            <nav class="xl:flex xl:gap-2 items-center ">
                <!--Verificando si el usuario se ha registrado-->
                @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                    @else

                    <a href="{{route('loginUser')}}" class="bg-[#4d4d4d] xl:px-6 xl:py-2 xl:rounded-sm text-white hover:bg-[#3e3e3e] hover:cursor-pointer duration-150 hover:scale-105">Ingresar</a>

                    @if (Route::has('registro'))

                    <a href="{{route('registro')}}" class="bg-[#ffffff] xl:px-6 xl:py-2 xl:rounded-sm text-black hover:bg-[#ededed] hover:cursor-pointer duration-150 hover:scale-105">Registrarse </a>
                    @endif
                    @endauth
                </nav>
                @endif


            </nav>
        </div>
    </header>
    <main>
        <!---Parte de la cabecera ( titulo, imagen) -->
        <div class="bg-[#ffffff]  text-[#000000]">
            <div class="xl:grid xl:grid-cols-2  xl:px-40 px-5  xl:py-32 py-3">
                <div class=" xl:flex xl:flex-col xl:gap-y-5 flex flex-col gap-y-3">
                    <p class="text-orange-500 font-bold xl:text-xl uppercase">El mejor cambio comienza aqui</p>
                    <h2 style="font-family: 'merriWeather', serif;" class="xl:text-shadow-lg xl:text-8xl text-5xl font-semibold xl:leading-24">Conectando ciudadanos para una ciudad mas limpia</h2>
                    <p class="xl:text-2xl text-lg">Transforma tu compromiso en acción. EcoCiudad es la plataforma que permite reportar problemas de limpieza y abandono urbano en tiempo real. Tu reporte llega directamente a las autoridades municipales, quienes priorizan y ejecutan la limpieza de tu barrio de manera eficiente.</p>
                    <div class="flex xl:justify-start justify-center ">
                        <a class="xl:px-5 xl:py-3 py-2 px-4 text-white font-bold xl:rounded-xl rounded-lg bg-amber-400 duration-200 hover:bg-amber-500 hover:cursor-pointer" href="{{route('reportes')}}">Ir a reportes</a>
                    </div>
                </div>
                <figure class="flex items-center xl:justify-end justify-center xl:my-0 my-10 ">
                    <img src="https://imgs.search.brave.com/D15VLoaoGA8kQnnZLih7xGcoFuTYotAa3mjApZyZGnw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wNTYv/ODM2LzE5NC9zbWFs/bC90d28tcGVvcGxl/LXBpY2tpbmctdXAt/dHJhc2gtb24tdGhl/LXN0cmVldC1mcmVl/LXBob3RvLmpwZWc" alt="" class="w-[87%] rounded-lg ">
                </figure>
            </div>
        </div>
        <!--Datos analizados-->
        <div class="bg-[#ffffff] xl:grid xl:grid-cols-4 xl:gap-28 xl:px-40 px-5 py-4 xl:pb-20 xl:pt-40">
            <div class="col-span-2 xl:flex xl:flex-col xl:gap-y-15">
                <h3 style="font-family: 'merriWeather', serif;" class="font-bold font xl:text-6xl text-center xl:pb-10 pb-7 text-3xl">Analisis De Datos</h3>
                <p class="xl:text-2xl text-lg xl:font-extralight">Nuestra plataforma procesa miles de datos geo-localizados en Arequipa para transformar la gestión pública. A través de este panel, las autoridades visualizan puntos críticos de abandono y priorizan la recuperación de espacios, garantizando una ciudad más limpia, segura y conectada para todos los ciudadanos.</p>
                <figure class="flex justify-center items-center xl:-mt-20 my-5">
                    <img src="https://imgs.search.brave.com/_XnlaV2jX7bvDSiQa-VqTDFHaODUP7g6cgzbDUsVeS4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZW5lcy5lbHBhaXMu/Y29tL3Jlc2l6ZXIv/djIvNURSVEFDTjZM/Rkg1N0NQRjNRM1hK/RFhNRlkuanBnP2F1/dGg9ZmI4MmU4ZGFm/ODUzNzFkNTQyYzUw/MDYxZmU0NjU4MjM3/YzkwMmU1ZjcwMjVk/OWQwNTY1NjkzMWVi/MTE0YTYxNiZ3aWR0/aD00MTQmaGVpZ2h0/PTMxMSZzbWFydD10/cnVl" alt="" class="xl:h-[66%] h-40  xl:w-[120%] w-[80%] rounded-2xl">
                </figure>
            </div>
            <div class="col-span-2">
                <div class="xl:grid xl:grid-cols-2 xl:gap-10 grid grid-cols-2 gap-4 ">
                    <div class="text-center bg-[#ffffff] xl:px-10 px-3 xl:py-12 py-3 xl:rounded-3xl rounded-2xl xl:flex xl:flex-col xl:gap-y-2 shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-50  xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl">25,000</span>
                        </div>
                        <p class=" xl:text-2xl text-lg xl:pt-5 xl:-mb-2 ">Ciudadanos Activos</p>
                        <p class="xl:text-sm text-sm font-light">ciudadanos registrados</p>
                    </div>
                    <div class="text-center bg-[#ffffff] xl:px-10 px-3 xl:py-12 py-3 xl:rounded-3xl rounded-2xl xl:flex xl:flex-col xl:gap-y-2 shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-50  xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl">25,000</span>
                        </div>
                        <p class="  xl:text-2xl text-lg xl:pt-5 xl:-mb-2">Numero de Reportes</p>
                        <p class="xl:text-sm text-sm font-light">Reportes enviados</p>
                    </div>
                    <div class="text-center bg-[#ffffff] xl:px-10 px-3 xl:py-12 py-3 xl:rounded-3xl rounded-2xl xl:flex xl:flex-col xl:gap-y-2 shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-50  xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl">35</span>
                        </div>
                        <p class="  xl:text-2xl text-lg xl:pt-5 xl:-mb-2">Distritos Atendidos</p>
                        <p class="xl:text-sm text-sm font-light">Mantenimiento y limpieza concluida</p>
                    </div>
                    <div class="text-center bg-[#ffffff] xl:px-10 px-3 xl:py-12 py-3 xl:rounded-3xl rounded-2xl xl:flex xl:flex-col xl:gap-y-2 shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-50  xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl">25,000</span>
                        </div>
                        <p class="  xl:text-2xl text-lg xl:pt-5 xl:-mb-2">Parques Recuperados</p>
                        <p class="xl:text-sm text-sm font-light"></p>
                    </div>

                    <div class="xl:text-center text-justify bg-[#ffffff] xl:px-10 px-6 xl:py-12 py-6 xl:rounded-3xl rounded-2xl xl:flex xl:flex-col col-span-2 xl:gap-y-2 shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <p class="font-bold xl:text-xl">Cada año reducimos el riesgo sanitario en un 40% mediante la eliminación de focos infecciosos.</p>
                        <p class="xl:text-sm">Gracias a los reportes en tiempo real, logramos intervenir antes de que la acumulación de residuos afecte la salud de las familias arequipeñas en zonas periféricas.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Beneficios de una ciudad limpia/ del sistema EcoCiudad-->
        <div class="bg-[#000000] text-white xl:py-28 py-10 xl:px-40 px-5">
            <div class="flex justify-center items-center">
                <h2 style="font-family: 'merriWeather', serif;" class="font-bold font xl:text-6xl text-center xl:pb-10 pb-10  text-3xl">Beneficios de EcoCiudad</h2>
            </div>

            <div class="xl:grid xl:grid-cols-7  xl:py-20 xl:gap-5 ">
                <div class="xl:col-span-2 xl:flex xl:flex-col xl:gap-y-15 grid grid-cols-2 gap-4">
                    <div class="xl:flex xl:flex-col xl:gap-y-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>

                        <div class="xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="font-bold xl:text-2xl">Salud Pública y Prevención de Plagas</h3>
                            <p class="xl:text-xl text-xs">Se evitará la proliferación de roedores, insectos y olores fétidos.Asi mismo, se reducira la incidencia de enfermedades respiratorias o dermatológicas en niños y ancianos que viven cerca de los puntos críticos o parques en abandono.</p>
                        </div>
                    </div>
                    <div class="xl:flex xl:flex-col xl:gap-y-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                        <div class="xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="font-bold xl:text-2xl">Reportes con Respaldo Geográfico y Temporal</h3>
                            <p class="xl:text-xl text-xs">Al automatizar la fecha y permitir la subida de fotos, se crea una evidencia inalterable.Esto evita confusiones sobre "qué tan viejo" es un problema.</p>
                        </div>
                    </div>
                </div>
                <figure class="xl:col-span-3 flex justify-center xl:my-0 my-4">
                    <img src="https://imgs.search.brave.com/Ym0WpWz2PZAj0edme5oovq7i8hKx7XaYptZr01GxgP0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9ibG9n/LmluY2FyYWlsLmNv/bS93cC1jb250ZW50/L3VwbG9hZHMvMjAy/NC8xMC9CbG9nLTgx/XzEuanBn" alt="" class="rounded-2xl xl:w-[80%] w-[80%] h-44 xl:h-[90%]">
                </figure>
                <div class="xl:col-span-2 xl:flex xl:flex-col xl:gap-y-15 grid grid-cols-2 gap-4">
                    <div class="xl:flex xl:flex-col xl:gap-y-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>

                        <div class="xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="font-bold xl:text-2xl">Recuperacion de lugares</h3>
                            <p class="xl:text-xl text-xs"> Seguridad: Los lugares limpios y cuidados disuaden la delincuencia.<br>Salud Pública: Se eliminan focos infecciosos y criaderos de plagas de manera preventiva antes de que se conviertan en una crisis sanitaria.</p>
                        </div>
                    </div>
                    <div class="xl:flex xl:flex-col xl:gap-y-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <div class="xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="xl:text-2xl font-bold">Participacion Ciudadana</h3>
                            <p class="xl:text-xl text-xs">Se fomentará una cultura de responsabilidad civil, ya que el ciudadano sabe que su participación está respaldada por su identidad real, elevando la calidad de la interacción en los comentarios.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pasos / Instrucciones-->
        <div class="bg-[#ffffff] xl:px-40 px-5 xl:py-32 py-10 xl:grid xl:grid-cols-2 xl:gap-30">
            <div>
                <p class="text-gray-500 xl:text-2xl xl:pb-5 uppercase">Facil y rapido</p>
                <h2 style="font-family: 'merriWeather', serif;" class="xl:text-6xl text-3xl font-bold xl:text-start text-start xl:pb-15 pb-6 xl:leading-19">¿Como realizar un reporte?</h2>
                <div class="flex flex-col xl:gap-y-8 gap-y-4">
                    <div>
                        <h2 class="font-bold xl:text-3xl text-xl text-gray-600">Toma una foto del lugar</h2>
                        <p class="xl:text-xl">Toma una fotografía del lugar en estado de abandono, acumulación de residuos o infraestructura dañada. Asegúrate de que el problema sea visible.</p>
                    </div>
                    <div>
                        <h2 class="font-bold xl:text-3xl text-xl text-gray-600">Agrega una breve descripción</h2>
                        <p class="xl:text-xl">Carga la foto en nuestra plataforma. Añade una breve descripción del lugar; el sistema registrará la fecha y ubicación de forma automática.</p>
                    </div>
                    <div>
                        <h2 class="font-bold xl:text-3xl text-xl text-gray-600">Espera a que tu reporte sea solucionado por la autoridad</h2>
                        <p class="xl:text-xl">Las autoridades recibirán tu reporte, le asignarán una prioridad y verás el cambio cuando el camión de basura o equipo de limpieza atienda el lugar.</p>
                    </div>
                </div>
            </div>

            <div class="xl:flex xl:items-center xl:justify-end justify-center xl:mt-0 mt-5">
                <figure class="">
                    <img src="https://imgs.search.brave.com/Cde0GDd9oRlWU9UV3bWcmmQJG3XmE7LXqW9Yo2YKNJ4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMjE2/NTAyNDczMi9waG90/by9idXNpbmVzc3dv/bWFuLWFuYWx5emlu/Zy1maW5hbmNpYWwt/ZGF0YS1vbi1kaWdp/dGFsLXRhYmxldC5q/cGc_cz02MTJ4NjEy/Jnc9MCZrPTIwJmM9/bE5ZblB6NU9HTE1Y/c2Qyel9pTTk2Mnk5/U0RsR19NcW8xdUtw/WkY2SzctTT0" alt="" class="rounded-lg xl:w-auto w-[50%]">
                </figure>
            </div>

        </div>
        <!--Lo que dicen lass personas de nosotros-->
        <div class="bg-white xl:px-40 px-5 xl:pb-40 pb-10 pt-5 xl:pt-14 xl:grid xl:grid-cols-3">
            <div class="">
                <p class="text-gray-500 xl:text-2xl xl:pb-5 uppercase">Testimonios</p>
                <h2 style="font-family: 'merriWeather', serif;" class="xl:text-6xl text-3xl font-bold xl:text-start text-start xl:pb-15 pb-6 xl:leading-19">Lo que dicen las personas de Nosotros</h2>
            </div>
            <div class="xl:col-span-2 justify-center flex">
                <figure class="">
                    <img src="https://imgs.search.brave.com/BWG2UUGHrwCPOxfphRqjWWrk-Pl6AUxjAueLoMPkYuQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/Y3JlYXRlLnZpc3Rh/LmNvbS9hcGkvbWVk/aWEvc21hbGwvMTky/NjQxMjc0L3N0b2Nr/LXBob3RvLXdvcmQt/d3JpdGluZy10ZXh0/LWNsaWVudC10ZXN0/aW1vbmlhbHMtYnVz/aW5lc3MtY29uY2Vw/dC1mb3ItY3VzdG9t/ZXItcGVyc29uYWwt/ZXhwZXJpZW5jZXMt/cmV2aWV3cy1vcGlu/aW9ucy1mZWVkYmFj/ay13cml0dGVu" alt="" class="rounded-lg">
                </figure>
            </div>

        </div>

    </main>
    <!--Parte del footer de la pagina-->
    <footer class="bg-black xl:grid xl:grid-cols-4 text-white xl:py-10 py-5 xl:px-40 px-5 xl:gap-10">
        <div class="xl:flex flex  justify-between xl:mb-0 mb-2 xl:flex-col xl:gap-y-5">
            <div class="">
                <h2 class=" font-bold xl:text-3xl text-sm">EcoCiudad</h2>
                <h5 class="xl:text-lg text-xs">Nuestras redes sociales</h5>
            </div>

            <div class="">
                <div class="flex xl:justify-start justify-end xl:gap-5 gap-2 xl:mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" class="bg-white size-8  xl:rounded-lg rounded-md">
                        <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" class="bg-white xl:rounded-lg rounded-md size-8">
                        <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" class="bg-white  xl:rounded-lg rounded-md size-8">
                        <path d="M19.077,4.928C17.191,3.041,14.683,2.001,12.011,2c-5.506,0-9.987,4.479-9.989,9.985 c-0.001,1.76,0.459,3.478,1.333,4.992L2,22l5.233-1.237c1.459,0.796,3.101,1.215,4.773,1.216h0.004 c5.505,0,9.986-4.48,9.989-9.985C22.001,9.325,20.963,6.816,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186 c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767c-0.125-0.167-1.019-1.353-1.019-2.581 S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006c0.178,0.007,0.375,0.016,0.562,0.431 c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416c-0.125,0.146-0.262,0.325-0.374,0.437 c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728c0.954,0.85,1.757,1.113,2.007,1.239 c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812 c0.25,0.125,0.416,0.187,0.478,0.291C17.106,14.471,17.106,14.971,16.898,15.554z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="bg-white size-8 rounded-md xl:rounded-lg">
                        <path d="M16,2c-7.732,0-14,6.268-14,14s6.268,14,14,14,14-6.268,14-14S23.732,2,16,2Zm6.489,9.521c-.211,2.214-1.122,7.586-1.586,10.065-.196,1.049-.583,1.401-.957,1.435-.813,.075-1.43-.537-2.218-1.053-1.232-.808-1.928-1.311-3.124-2.099-1.382-.911-.486-1.412,.302-2.23,.206-.214,3.788-3.472,3.858-3.768,.009-.037,.017-.175-.065-.248-.082-.073-.203-.048-.29-.028-.124,.028-2.092,1.329-5.905,3.903-.559,.384-1.065,.571-1.518,.561-.5-.011-1.461-.283-2.176-.515-.877-.285-1.574-.436-1.513-.92,.032-.252,.379-.51,1.042-.773,4.081-1.778,6.803-2.95,8.164-3.517,3.888-1.617,4.696-1.898,5.222-1.907,.116-.002,.375,.027,.543,.163,.142,.115,.181,.27,.199,.379,.019,.109,.042,.357,.023,.551Z" fill-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-span-2 xl:flex xl:items-center">
            <div>
                <h4 class="font-bold xl:text-xl">Acerca de Nosotros</h4>
                <p class="xl:text-lg text-xs xl:text-start text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, tempora? Exercitationem sapiente perspiciatis cum suscipit, autem dolorum ipsam natus omnis?</p>
            </div>

        </div>
        <div class="xl:flex flex justify-around gap-6 xl:flex-col xl:gap-y-5 xl:mt-0 mt-3">
            <div>
                <h5 class="font-bold xl:text-lg text-xs">Telefono:</h5>
                <p class="xl:text-lg text-xs">+51 987654321</p>
            </div>
            <div class="">
                <h5 class="font-bold xl:text-lg text-xs">Email:</h5>
                <p class="xl:text-lg text-xs">ecociudad@gmail.com</p>
            </div>
        </div>
    </footer>
    <script>
        //JavaScript para el menu hamburgeusa
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menu-btn');
            const menuPanel = document.getElementById('menu-panel');
            let HacerClick = false;

            // Alterna la visibilidad del panel
            const toggleMenu = () => {
                HacerClick = !HacerClick;
                menuBtn.setAttribute('aria-expanded', HacerClick);
                menuPanel.classList.toggle('hidden');
            };

            // Clic en el botón hamburguesa
            menuBtn.addEventListener('click', (e) => {
                e.stopPropagation(); // Evita que el clic se propague al documento
                toggleMenu();
            });

            // Cierra el menú al hacer clic fuera de la ventanita flotante
            document.addEventListener('click', (e) => {
                if (HacerClick && !menuBtn.contains(e.target) && !menuPanel.contains(e.target)) {
                    toggleMenu();
                }
            });

            // Cierra el menú si se presiona la tecla Escape
            document.addEventListener('keydown', (e) => {
                if (HacerClick && e.key === 'Escape') {
                    toggleMenu();
                    menuBtn.focus(); // Retorna el foco al botón por accesibilidad
                }
            });
        });
    </script>
</body>

</html>