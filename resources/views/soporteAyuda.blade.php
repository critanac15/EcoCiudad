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

</head>

<body>
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
                <!--Verificando si el usuario se ha registrado-->
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
        <div class="flex justify-center items-center xl:pt-24 pt-12 ">
            <form action="{{route('soporteAyuda')}}" role="search" class="flex items-center shadow-xl shadow-black/5 border border-gray-200 rounded-2xl">
                <div class="flex items-center bg-white  rounded-2xl xl:w-96 w-80 ">
                    <input type="search" list="opciones-soporte" placeholder="¿En qué podemos ayudarte?" class="xl:px-3 xl:py-2 w-full focus:outline-0  border-2 rounded-lg border-gray-100 text-gray-700">
                    <button type="submit" class="xl:pr-3 pr-3 xl:pl-3 pl-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>
                <datalist id="opciones-soporte">
                    <option value="Configuración de cuenta">
                    <option value="Problemas con el pago">
                    <option value="Recuperar contraseña">
                    <option value="Hablar con un agente">
                    <option value="Estado del pedido">
                </datalist>
            </form>
        </div>
        <div class="xl:grid xl:grid-cols-3  xl:gap-10 xl:px-40 xl:py-16 font-light">
            <div class="flex flex-col items-center bg-white xl:rounded-xl xl:py-7 shadow-2xl shadow-black/10 px-4 py-6 xl:my-0 my-8 mx-4 ">
                <div class="w-full max-w-4xl min-w-[18rem]">
                    <h2 class="xl:text-2xl text-xl font-bold text-gray-800 text-center mb-6">Mi cuenta y registro</h2>

                    <div class="flex flex-col gap-3">
                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-1" open>
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                ¿Cómo puedo crear una cuenta?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Al registrarte, el sistema te pedirá tu Nro de DNI para que el sistema pueda verificar que eres un ciudadano real. Asimismo, necesitarás ingresar un correo electrónico válido y crear una contraseña segura.
                            </div>
                        </details>

                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-1">
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                Olvidé mi contraseña, ¿qué hago?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Haz clic en "Olvidé mi contraseña" en la pantalla de ingreso y te enviaremos un enlace de recuperación a tu correo registrado.
                            </div>
                        </details>

                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-1">
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                ¿Pueden usar mi cuenta otros familiares?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Se recomienda una cuenta por persona (DNI), ya que los reportes son personales para garantizar la veracidad de la información.
                            </div>
                        </details>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white xl:rounded-xl xl:py-7 shadow-2xl shadow-black/10 px-4 py-6 xl:my-0 my-8 mx-4 ">
                <div class="w-full max-w-4xl min-w-[18rem]">
                    <h2 class="xl:text-2xl text-xl font-bold text-gray-800 text-center mb-6">Cómo reportar</h2>

                    <div class="flex flex-col gap-3">
                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-2" open>
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                ¿Qué fotos debo subir en mi reporte?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Sube una foto clara del lugar afectado (parque, berma o calle). Evita fotos borrosas para que las autoridades identifiquen rápido el problema.
                            </div>
                        </details>

                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-2">
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                ¿La ubicación se marca sola?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Sí, al subir la foto desde el lugar, el sistema detecta automáticamente las coordenadas. Asegúrate de tener el GPS activado.
                            </div>
                        </details>

                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-2">
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                How do I update my profile information?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Go to "My Account" settings and select "Edit Profile" to make changes.
                            </div>
                        </details>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center bg-white xl:rounded-xl xl:py-7 shadow-2xl shadow-black/10 px-4 py-6 xl:my-0 my-8 mx-4 ">
                <div class="w-full max-w-4xl min-w-[18rem]">
                    <h2 class="xl:text-2xl text-xl font-bold text-gray-800 text-center mb-6">Privacidad y Seguridad</h2>

                    <div class="flex flex-col gap-3">
                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-3" open>
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                ¿Quiénes pueden ver mis datos personales?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Tus datos solo son visibles para los administradores municipales autorizados. Otros ciudadanos solo verán tu nombre en los comentarios.
                            </div>
                        </details>

                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-3">
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                ¿Cómo denuncio un comentario ofensivo?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Si ves un comentario inapropiado en un reporte, puedes notificarnos a través del botón de soporte para moderar la comunidad.
                            </div>
                        </details>

                        <details class="group border border-gray-200 bg-white rounded-lg overflow-hidden" name="grupo-3">
                            <summary class="flex justify-between items-center font-semibold p-4 cursor-pointer list-none [&::-webkit-details-marker]:hidden hover:bg-gray-50 transition-colors">
                                How do I update my profile information?
                                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                                    <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="20">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-sm p-4 pt-0 text-gray-600 border-t border-gray-100 mt-2">
                                Go to "My Account" settings and select "Edit Profile" to make changes.
                            </div>
                        </details>
                    </div>
                </div>
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
        });
    </script>
</body>

</html>