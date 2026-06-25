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
    <!--Heroicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulseSubtle {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.02);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .animate-slideUp {
            animation: slideUp 0.6s ease-out forwards;
        }

        .animate-slideUp.delay-200 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .animate-pulse-subtle {
            animation: pulseSubtle 2s ease-in-out infinite;
        }
    </style>
</head>

<body class="flex flex-col h-full">
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

                <!-- Botones de autenticación -->
                <div class="flex justify-center md:justify-end items-center gap-2 col-span-1">
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

    <!-- MAIN CONTENT - Con animaciones y mejor estructura -->
    <main class="flex-1 px-4 md:px-20 xl:px-40 py-10 md:py-20">
        <div class="max-w-4xl mx-auto animate-fadeIn">
            <!-- Título y descripción con animación -->
            <div class="text-center mb-8 md:mb-12 animate-slideUp">
                <h2 class="text-3xl md:text-4xl xl:text-5xl font-bold text-gray-800 mb-3 md:mb-4">Contacto Ciudadano</h2>
                <p class="text-lg md:text-xl xl:text-2xl font-light text-gray-600 max-w-2xl mx-auto">Tu participación es clave para construir un entorno más limpio y sostenible.</p>
            </div>

            <!-- Formulario centrado con efecto glassmorphism -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl shadow-black/10 p-6 md:p-10 xl:p-12 animate-slideUp delay-200">
                <form action="#" method="POST" class="max-w-2xl mx-auto space-y-6">
                    @csrf

                    <!-- Campo: Nombre -->
                    <div class="group">
                        <label for="name" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2 transition-colors duration-200 group-focus-within:text-indigo-600">
                            Nombre <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" required
                            class="w-full bg-gray-50 border-2 border-transparent rounded-xl px-4 py-3 text-sm text-gray-800 transition-all duration-300 focus:border-indigo-400 focus:bg-white focus:shadow-lg hover:shadow-md">
                    </div>

                    <!-- Campo: Email -->
                    <div class="group">
                        <label for="email" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2 transition-colors duration-200 group-focus-within:text-indigo-600">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full bg-gray-50 border-2 border-transparent rounded-xl px-4 py-3 text-sm text-gray-800 transition-all duration-300 focus:border-indigo-400 focus:bg-white focus:shadow-lg hover:shadow-md">
                    </div>

                    <!-- Campo: Mensaje -->
                    <div class="group">
                        <label for="mensaje" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2 transition-colors duration-200 group-focus-within:text-indigo-600">
                            Mensaje <span class="text-red-500">*</span>
                            <span class="font-normal lowercase text-gray-400 text-[10px]">(máximo 500 caracteres)</span>
                        </label>
                        <textarea id="mensaje" name="mensaje" rows="5" required maxlength="500"
                            oninput="updateCounter()"
                            class="w-full bg-gray-50 border-2 border-transparent rounded-xl px-4 py-3 text-sm text-gray-800 transition-all duration-300 focus:border-indigo-400 focus:bg-white focus:shadow-lg hover:shadow-md resize-y min-h-[120px]"></textarea>

                        <div class="flex justify-between text-xs text-gray-500 mt-1.5">
                            <span>Caracteres utilizados: <span id="charCount" class="font-semibold">0</span></span>
                            <span id="charWarning" class="text-red-500  flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <span>Cerca del límite</span>
                            </span>
                        </div>
                    </div>

                    <!-- Botón de envío con animación pulse -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-slate-900 to-slate-800 text-white font-semibold rounded-xl transition-all duration-300 hover:from-slate-800 hover:to-slate-700 hover:scale-[1.02] hover:shadow-xl active:scale-[0.98] animate-pulse-subtle">
                            <span class="flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                <center>Mandar Mensaje</center>
                            </span>
                        </button>
                    </div>
                </form>
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
    <div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 animate-fadeIn">
        <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 text-center shadow-2xl animate-slideUp">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">¡Mensaje Enviado!</h3>
            <p class="text-gray-600 mb-6">Tu mensaje ha sido recibido. Te responderemos a la brevedad.</p>
            <button onclick="closeModal()" class="px-6 py-2 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition">
                Entendido
            </button>
        </div>
    </div>

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
        ////////////////////////////////////////////////////////////
        function updateCounter() {
            const textarea = document.getElementById('mensaje');
            const count = document.getElementById('charCount');
            const warning = document.getElementById('charWarning');
            const length = textarea.value.length;

            count.textContent = length;

            if (length > 450) {
                warning.classList.remove('hidden');
                count.classList.add('text-red-500');
            } else {
                warning.classList.add('hidden');
                count.classList.remove('text-red-500');
            }
        }

        function showModal() {
            document.getElementById('successModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // Cerrar modal con ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeModal();
        });

        // Cerrar modal haciendo clic fuera
        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });

        // Modificar el submit del formulario para mostrar el modal
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Validaciones aquí...
                showModal();
                form.reset();
                document.getElementById('charCount').textContent = '0';
            });
        });
    </script>
</body>

</html>