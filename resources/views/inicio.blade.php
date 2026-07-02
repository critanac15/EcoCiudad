<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoCiudad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/svg+xml" href="{{asset('logo.svg')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body class="font-light overflow-x-hidden">

    <header class=" bg-[#000000] text-white xl:py-5 py-2 xl:px-40 px-4">
        <div class="xl:hidden  grid grid-cols-3">
            <a href="{{ route('inicio') }}" class="flex justify-start items-center col-span-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                </svg>

                <h1 class="xl:text-2xl xl:block text-white">EcoCiudad</h1>
            </a>
            <div class="relative flex justify-end p-1">
                <div class="relative">
                    <button id="menu-btn" aria-expanded="false" class="flex h-11 w-11 items-center justify-center rounded-xl bg-black text-white shadow-md  active:bg-gray-800 focus:outline-none  transition-colors">
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
        <div id="menuXL" class=" hidden  xl:grid xl:grid-cols-7">
            <a href="{{ route('inicio') }}" class="xl:flex xl:justify-start xl:items-center  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-9 size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                </svg>

                <h1 class="xl:text-2xl  xl:block">EcoCiudad</h1>
            </a>
            <nav class="xl:flex xl:gap-4 xl:col-span-5  xl:justify-center xl:text-lg">
                <a class="  xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{ route('inicio') }} ">Inicio</a>
                <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('reportes')}}">Reportes</a>
                <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('soporteAyuda')}}">Soporte / ayuda</a>
                <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-110 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('contacto')}}">Contacto</a>
            </nav>
            <nav class="xl:flex xl:gap-2 items-center">
                @if (Route::has('login'))

                @auth
                <div class="ml-auto">
                    <a
                        href="{{ url('/dashboard') }}"
                        class=" px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-base ">
                        Dashboard
                    </a>
                </div>
                @else
                <div class="flex items-center justify-start gap-4 xl:right-6 xl:relative ">

                    <a href="{{route('loginUser')}}" class="bg-[#4d4d4d] xl:px-6 xl:py-2 xl:rounded-sm text-white hover:bg-[#3e3e3e] hover:cursor-pointer duration-150 hover:scale-105">Ingresar</a>

                    @if (Route::has('registro'))
                    <a href="{{route('registro')}}" class="bg-[#ffffff] xl:px-6 xl:py-2 xl:rounded-sm text-black hover:bg-[#ededed] hover:cursor-pointer duration-150 hover:scale-105">Registrarse </a>
                    @endif
                </div>
                @endauth
                @endif
            </nav>
        </div>
    </header>
    <main>
        <div class="bg-[#ffffff] text-[#000000]">
            <div class="xl:grid xl:grid-cols-2  xl:px-40 px-5  xl:py-32 py-3 overflow-hidden">
                <div class="reveal-item opacity-0 translate-y-12 transition-all duration-700 ease-out xl:flex xl:flex-col xl:gap-y-5 flex flex-col gap-y-3">
                    <p class="text-orange-500 font-bold xl:text-xl uppercase">El mejor cambio comienza aqui</p>
                    <h2 style="font-family: 'merriWeather', serif;" class="xl:text-shadow-lg xl:text-8xl text-5xl font-semibold xl:leading-24">Conectando ciudadanos para una ciudad mas limpia</h2>
                    <p class="xl:text-2xl font-normal">Transforma tu compromiso en acción. EcoCiudad es la plataforma que permite reportar problemas de limpieza y abandono urbano en tiempo real. Tu reporte llega directamente a las autoridades municipales, quienes priorizan y ejecutan la limpieza de tu barrio de manera eficiente.</p>
                    <div class="flex xl:justify-start justify-center ">
                        <a class="xl:px-5 xl:py-3 py-2 px-4 text-white font-bold xl:rounded-xl rounded-lg bg-amber-400 duration-200 hover:bg-amber-500 hover:cursor-pointer" href="{{route('reportes')}}">Ir a reportes</a>
                    </div>
                </div>
                <figure class="reveal-item delay-200 opacity-0 translate-y-12 transition-all duration-700 ease-out flex items-center xl:justify-end justify-center xl:my-0 my-10 ">
                    <img src="https://imgs.search.brave.com/sSmJob8CKmGsrJyKbl7lD0OYL3BvBefNIGav1wyrgWU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/bXVuaWFyZXF1aXBh/LmdvYi5wZS93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNi8wMi82/MzY4NDgxNDlfMTQx/MzI3NzkxNDE3ODAw/OF84MDkzMjE5NDE1/NzAwODIzOTUxX24t/MTAyNHg3NjguanBn" alt="" class="xl:w-[87%] w-full rounded-lg ">
                </figure>
            </div>
        </div>
        <!---Analisis de datos--->
        <div class="bg-[#ffffff] xl:grid xl:grid-cols-4 xl:gap-28 xl:px-40 px-5 pt-4 pb-12 xl:pb-56 xl:pt-40 overflow-hidden">
            <div class="reveal-item opacity-0 translate-y-12 transition-all duration-700 ease-out col-span-2 xl:flex xl:flex-col xl:gap-y-15 xl:mb-0 mb-3 ">
                <h3 style="font-family: 'merriWeather', serif;" class="font-bold font xl:text-6xl text-center xl:pb-10 pb-7 text-3xl">Analisis De Datos</h3>
                <p class="xl:text-2xl xl:font-extralight font-normal text-justify xl:block hidden">Nuestra plataforma procesa miles de datos geo-localizados en Arequipa para transformar la gestión pública. A través de este panel, las autoridades visualizan puntos críticos de abandono y priorizan la recuperación de espacios, garantizando una ciudad más limpia, segura y conectada para todos los ciudadanos.</p>
                <figure class=" xl:flex xl:justify-center xl:items-center xl:mt-20 hidden ">
                    <img src="https://imgs.search.brave.com/1q4nCtkv4QuLYX7v68g9_SHKlvSBqsqCYMBdC0LdvbE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTU2/ODMyMDM1NC9lcy9m/b3RvL3Zpc3RhLWEl/QzMlQTlyZWEtZGUt/bGEtY2F0ZWRyYWwt/ZGUtYXJlcXVpcGEt/ZW4tbGEtY2l1ZGFk/LWRlLWFyZXF1aXBh/LmpwZz9iPTEmcz02/MTJ4NjEyJnc9MCZr/PTIwJmM9RVRPYnFT/NTlZZDZzTnNtaWJm/bjZvVVo5WERsekxu/bFRBRkxnVm94cDV4/OD0" alt="" class="xl:h-[95%]   xl:w-[100%]  rounded-2xl">
                </figure>
            </div>
            <div class="col-span-2">
                <div class="xl:grid xl:grid-cols-2 xl:gap-10 grid grid-cols-2 gap-4 ">
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out text-center bg-[#ffffff] xl:px-10 px-2 xl:py-12 py-5 xl:rounded-3xl rounded-2xl  justify-center flex flex-col xl:gap-y-2 gap-y-3  shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-100 px-3 py-1 xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl font-semibold">5,702</span>
                        </div>
                        <div>
                            <p class=" xl:text-3xl text-lg xl:pt-5 -mb-1">Usuarios registrados</p>
                            <p class="xl:text-xl text-sm font-light">usuarios verificados en la app</p>
                        </div>
                    </div>
                    <div class="reveal-item delay-200 opacity-0 translate-y-12 transition-all duration-700 ease-out text-center bg-[#ffffff] xl:px-10 px-3 xl:py-12 py-5 xl:rounded-3xl rounded-2xl  justify-center flex flex-col xl:gap-y-2 gap-y-3  shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-100 px-3 py-1 xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl font-semibold">153</span>
                        </div>
                        <div>
                            <p class=" xl:text-3xl text-lg xl:pt-5 -mb-1">Numero de reportes</p>
                            <p class="xl:text-xl text-sm font-light">reportes realizados por los usuarios</p>
                        </div>
                    </div>
                    <div class="reveal-item delay-300 opacity-0 translate-y-12 transition-all duration-700 ease-out text-center bg-[#ffffff] xl:px-10 px-3 xl:py-12 py-5 xl:rounded-3xl rounded-2xl  justify-center flex flex-col xl:gap-y-2 gap-y-3  shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-100 px-3 py-1 xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl font-semibold">71</span>
                        </div>
                        <div>
                            <p class=" xl:text-3xl text-lg xl:pt-5 -mb-1">Reportes atendidos</p>
                            <p class="xl:text-xl text-sm font-light">reportes atendidos por la municipalidad</p>
                        </div>
                    </div>
                    <div class="reveal-item delay-[400ms] opacity-0 translate-y-12 transition-all duration-700 ease-out text-center bg-[#ffffff] xl:px-10 px-3 xl:py-12 py-5 xl:rounded-3xl rounded-2xl  justify-center flex flex-col xl:gap-y-2 gap-y-3  shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <div>
                            <span class="bg-gray-100 px-3 py-1 xl:px-4 xl:py-3 rounded-br-2xl rounded-tl-2xl xl:text-3xl text-2xl font-semibold">29</span>
                        </div>
                        <div>
                            <p class=" xl:text-3xl text-lg xl:pt-5 -mb-1">Reportes en espera</p>
                            <p class="xl:text-xl text-sm font-light">respuesta en 2 o 3 dias</p>
                        </div>
                    </div>

                    <div class="reveal-item delay-[500ms] opacity-0 translate-y-12 transition-all duration-700 ease-out xl:text-center text-justify bg-[#ffffff] xl:px-10 px-6 xl:py-12 py-6 xl:rounded-3xl rounded-2xl xl:flex xl:flex-col col-span-2 xl:gap-y-2 shadow-2xl xl:shadow-black/8 shadow-black/1">
                        <p class="font-bold xl:text-xl text-base">Cada año reducimos el riesgo sanitario en un 40% mediante la eliminación de focos infecciosos.</p>
                        <p class="xl:text-sm text-sm">Gracias a los reportes en tiempo real, logramos intervenir antes de que la acumulación de residuos afecte la salud de las familias arequipeñas en zonas periféricas.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--- Beneficios de EcoCiudad-->
        <div class="bg-[#000000] text-white xl:py-36 py-10 xl:px-40 px-5 overflow-hidden">
            <div class="reveal-item opacity-0 translate-y-12 transition-all duration-700 ease-out flex justify-center items-center">
                <h2 style="font-family: 'merriWeather', serif;" class="font-bold font xl:text-6xl text-center xl:pb-10 pb-10  text-3xl">Beneficios de EcoCiudad</h2>
            </div>

            <div class="xl:grid xl:grid-cols-7  xl:py-20 xl:gap-5 ">
                <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:col-span-2 xl:flex xl:flex-col xl:gap-y-15 grid grid-cols-2 gap-4">
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:flex xl:flex-col xl:gap-y-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10 float-right xl:float-none">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        <div class="xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="font-bold xl:text-2xl ">Salud Pública y Prevención de Plagas</h3>
                            <p class="xl:text-xl text-xs xl:text-start text-justify">Se evitará la proliferación de roedores, insectos y olores fétidos.Asi mismo, se reducira la incidencia de enfermedades respiratorias o dermatológicas en niños y ancianos que viven cerca de los puntos críticos o parques en abandono.</p>
                        </div>
                    </div>
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:flex xl:flex-col xl:gap-y-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10 xl:float-none float-right ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                        <div class="xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="font-bold xl:text-2xl">Reportes con Respaldo Geográfico y Temporal</h3>
                            <p class="xl:text-xl text-xs xl:text-start text-justify">Al automatizar la fecha y permitir la subida de fotos, se crea una evidencia inalterable.Esto evita confusiones sobre "qué tan viejo" es un problema.</p>
                        </div>
                    </div>
                </div>
                <figure class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:col-span-3 flex justify-center xl:my-0 my-10">
                    <img src="https://imgs.search.brave.com/Ym0WpWz2PZAj0edme5oovq7i8hKx7XaYptZr01GxgP0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9ibG9n/LmluY2FyYWlsLmNv/bS93cC1jb250ZW50/L3VwbG9hZHMvMjAy/NC8xMC9CbG9nLTgx/XzEuanBn" alt="" class="rounded-2xl xl:w-[80%] w-full h-60 xl:h-[90%]">
                </figure>
                <div class="reveal-item delay-[500ms] opacity-0 translate-y-12 transition-all duration-700 ease-out xl:col-span-2 xl:flex xl:flex-col xl:gap-y-15 grid grid-cols-2 gap-4">
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:flex xl:flex-col xl:gap-y-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10 float-right xl:float-none">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>

                        <div class=" xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="font-bold xl:text-2xl">Recuperacion de lugares</h3>
                            <p class="xl:text-xl text-xs text-justify xl:text-start"> Seguridad: Los lugares limpios y cuidados disuaden la delincuencia.<br>Salud Pública: Se eliminan focos infecciosos y criaderos de plagas de manera preventiva antes de que se conviertan en una crisis sanitaria.</p>
                        </div>
                    </div>
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:flex xl:flex-col xl:gap-y-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-14 size-10 xl:float-none float-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <div class=" xl:flex xl:flex-col xl:gap-y-2">
                            <h3 class="xl:text-2xl font-bold">Participacion Ciudadana</h3>
                            <p class="xl:text-xl text-xs text-justify xl:text-start">Se fomentará una cultura de responsabilidad civil, ya que el ciudadano sabe que su participación está respaldada por su identidad real, elevando la calidad de la interacción en los comentarios.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#ffffff] xl:px-40 px-5 xl:py-32 py-10 xl:grid xl:grid-cols-2 xl:gap-30 overflow-hidden">
            <div class="reveal-item opacity-0 translate-y-12 transition-all duration-700 ease-out">
                <p class="text-gray-500 xl:text-2xl xl:pb-5 uppercase">Facil y rapido</p>
                <h2 style="font-family: 'merriWeather', serif;" class="xl:text-6xl text-3xl font-bold xl:text-start text-start xl:pb-15 pb-6 xl:leading-19">¿Como realizar un reporte?</h2>
                <div class="flex flex-col xl:gap-y-8 gap-y-4">
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-12 size-8 xl:mt-5 xl:mr-3 float-left m-1 -mt-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                        </svg>
                        <div>
                            <h2 class="font-bold xl:text-3xl text-xl text-gray-600">Toma una foto del lugar</h2>
                            <p class="xl:text-xl text-justify">Toma una fotografía del lugar en estado de abandono, acumulación de residuos o infraestructura dañada. Asegúrate de que el problema sea visible.</p>
                        </div>
                    </div>
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-12 size-8 xl:mt-5 xl:mr-3 float-left m-1 -mt-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        <div>
                            <h2 class="font-bold xl:text-3xl text-xl text-gray-600">Agrega una breve descripción</h2>
                            <p class="xl:text-xl">Carga la foto en nuestra plataforma. Añade una breve descripción del lugar; el sistema registrará la fecha y ubicación de forma automática.</p>
                        </div>
                    </div>
                    <div class="reveal-item delay-100 opacity-0 translate-y-12 transition-all duration-700 ease-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-12 size-8 xl:mt-5 xl:mr-3 float-left m-1 -mt-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>
                        <div>

                            <h2 class="font-bold xl:text-3xl text-xl text-gray-600">Espera a que tu reporte sea solucionado</h2>
                            <p class="xl:text-xl">Las autoridades recibirán tu reporte, le asignarán una prioridad y verás el cambio cuando el camión de basura o equipo de limpieza atienda el lugar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal-item delay-300 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:flex  hidden xl:items-center xl:justify-end justify-center xl:mt-0 mt-5">
                <figure class="">
                    <img src="https://imgs.search.brave.com/Cde0GDd9oRlWU9UV3bWcmmQJG3XmE7LXqW9Yo2YKNJ4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMjE2/NTAyNDczMi9waG90/by9idXNpbmVzc3dv/bWFuLWFuYWx5emlu/Zy1maW5hbmNpYWwt/ZGF0YS1vbi1kaWdp/dGFsLXRhYmxldC5q/cGc_cz02MTJ4NjEy/Jnc9MCZrPTIwJmM9/bE5ZblB6NU9HTE1Y/c2Qyel9pTTk2Mnk5/U0RsR19NcW8xdUtw/WkY2SzctTT0" alt="" class="rounded-lg xl:w-auto w-[50%]">
                </figure>
            </div>

        </div>

        <div class="bg-white xl:px-40 px-5 xl:pb-40 pb-10 pt-5 xl:pt-14 xl:grid xl:grid-cols-3 overflow-hidden">
            <div class="reveal-item opacity-0 translate-y-12 transition-all duration-700 ease-out">
                <p class="text-gray-500 xl:text-2xl xl:pb-5 uppercase">Testimonios</p>
                <h2 style="font-family: 'merriWeather', serif;" class="xl:text-6xl text-3xl font-bold xl:text-start text-start xl:pb-15 pb-6 xl:leading-19">Lo que dicen las personas de Nosotros</h2>
            </div>
            <div class="reveal-item delay-300 opacity-0 translate-y-12 transition-all duration-700 ease-out xl:col-span-2 justify-center flex">
                <figure class="">
                    <img src="https://imgs.search.brave.com/BWG2UUGHrwCPOxfphRqjWWrk-Pl6AUxjAueLoMPkYuQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/Y3JlYXRlLnZpc3Rh/LmNvbS9hcGkvbWVk/aWEvc21hbGwvMTky/NjQxMjc0L3N0b2Nr/LXBob3RvLXdvcmQt/d3JpdGluZy10ZXh0/LWNsaWVudC10ZXN0/aW1vbmlhbHMtYnVz/aW5lc3MtY29uY2Vw/dC1mb3ItY3VzdG9t/ZXItcGVyc29uYWwt/ZXhwZXJpZW5jZXMt/cmV2aWV3cy1vcGlu/aW9ucy1mZWVkYmFj/ay13cml0dGVu" alt="" class="rounded-lg">
                </figure>
            </div>

        </div>

    </main>
    <!-- FOOTER - Optimizado y más compacto -->
    <footer class="bg-black text-white py-8 md:py-10 px-4 md:px-10 xl:px-40">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8 md:gap-6">
            <!-- Columna 1: Logo y redes -->
            <div class="flex flex-col gap-4">
                <h2 class="text-2xl md:text-3xl font-bold">EcoCiudad</h2>
                <div>
                    <h5 class="text-base md:text-lg font-semibold mb-3">Nuestras redes</h5>
                    <div class="flex gap-3 flex-wrap">
                        <!-- logo fb -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 bg-white rounded-lg p-1.5 hover:scale-110 transition-all duration-200 cursor-pointer">
                            <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z" fill="#1877F2" />
                        </svg>

                        <!-- logo ig -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 bg-white rounded-lg p-1.5 hover:scale-110 transition-all duration-200 cursor-pointer">
                            <path d="M8,3C5.239,3,3,5.239,3,8v8c0,2.761,2.239,5,5,5h8c2.761,0,5-2.239,5-5V8c0-2.761-2.239-5-5-5H8z M18,5c0.552,0,1,0.448,1,1s-0.448,1-1,1s-1-0.448-1-1S17.448,5,18,5z M12,7c2.761,0,5,2.239,5,5s-2.239,5-5,5s-5-2.239-5-5S9.239,7,12,7z M12,9c-1.657,0-3,1.343-3,3s1.343,3,3,3s3-1.343,3-3S13.657,9,12,9z" fill="#E4405F" />
                        </svg>

                        <!-- logo wsp -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 bg-white rounded-lg p-1.5 hover:scale-110 transition-all duration-200 cursor-pointer">
                            <path d="M19.077,4.928C17.191,3.041,14.683,2.001,12.011,2c-5.506,0-9.987,4.479-9.989,9.985 c-0.001,1.76,0.459,3.478,1.333,4.992L2,22l5.233-1.237c1.459,0.796,3.101,1.215,4.773,1.216h0.004 c5.505,0,9.986-4.48,9.989-9.985C22.001,9.325,20.963,6.816,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186 c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767c-0.125-0.167-1.019-1.353-1.019-2.581 S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006c0.178,0.007,0.375,0.016,0.562,0.431 c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416c-0.125,0.146-0.262,0.325-0.374,0.437 c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728c0.954,0.85,1.757,1.113,2.007,1.239 c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812 c0.25,0.125,0.416,0.187,0.478,0.291C17.106,14.471,17.106,14.971,16.898,15.554z" fill="#25D366" />
                        </svg>

                        <!-- logo yt -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-8 h-8 bg-white rounded-lg p-1.5 hover:scale-110 transition-all duration-200 cursor-pointer">
                            <path d="M16,2c-7.732,0-14,6.268-14,14s6.268,14,14,14,14-6.268,14-14S23.732,2,16,2Zm6.489,9.521c-.211,2.214-1.122,7.586-1.586,10.065-.196,1.049-.583,1.401-.957,1.435-.813,.075-1.43-.537-2.218-1.053-1.232-.808-1.928-1.311-3.124-2.099-1.382-.911-.486-1.412,.302-2.23,.206-.214,3.788-3.472,3.858-3.768,.009-.037,.017-.175-.065-.248-.082-.073-.203-.048-.29-.028-.124,.028-2.092,1.329-5.905,3.903-.559,.384-1.065,.571-1.518,.561-.5-.011-1.461-.283-2.176-.515-.877-.285-1.574-.436-1.513-.92,.032-.252,.379-.51,1.042-.773,4.081-1.778,6.803-2.95,8.164-3.517,3.888-1.617,4.696-1.898,5.222-1.907,.116-.002,.375,.027,.543,.163,.142,.115,.181,.27,.199,.379,.019,.109,.042,.357,.023,.551Z" fill="#FF0000" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Columna 2-3: Acerca de Nosotros -->
            <div class="md:col-span-1 xl:col-span-2">
                <h4 class="font-bold text-lg mb-2 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Sobre EcoCiudad
                </h4>
                <p class="text-sm md:text-base text-gray-300 max-w-md text-justify leading-relaxed">
                    EcoCiudad nace como una iniciativa ciudadana para construir entornos urbanos
                    más sostenibles y limpios. Conectamos a vecinos, autoridades y organizaciones para resolver problemas ambientales de manera colaborativa.
                </p>
            </div>

            <!-- Columna 4: Contacto -->
            <div class="space-y-3">
                <div>
                    <h5 class="font-bold text-lg">Teléfono:</h5>
                    <p class="text-sm md:text-base text-gray-300">+51 987654321</p>
                </div>
                <div>
                    <h5 class="font-bold text-lg">Email:</h5>
                    <p class="text-sm md:text-base text-gray-300">ecociudad@gmail.com</p>
                </div>
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

            // ======================================================================================
            // Para Animaciones Scroll
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const scrollObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const hiddenClasses = ['opacity-0', 'translate-y-12'];
                    const visibleClasses = ['opacity-100', 'translate-y-0'];

                    if (entry.isIntersecting) {
                        entry.target.classList.remove(...hiddenClasses);
                        entry.target.classList.add(...visibleClasses);
                    // Dejamos de observar el elemento una vez que ya apareció
                        // Esto soluciona el bug del parpadeo (flickering) que ocurre cuando 
                        // la animación de "translate-y" empuja el elemento fuera del threshold
                        scrollObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.reveal-item');
            animatedElements.forEach((el) => {
                scrollObserver.observe(el);
            });
        });
    </script>
</body>

</html>