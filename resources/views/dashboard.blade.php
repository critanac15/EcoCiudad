<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <nav x-data="{ open: false }" class=" border-b border-gray-100 ">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16 ">
                        <div class="flex ">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('inicio') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-9 ">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out' : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out' }}">
                                    {{ __('Dashboard') }}
                                </a>
                            </div>
                        </div>
                        <div class="px-4 py-2 text-center items-center">
                            <div class="font-medium text-lg text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-xs text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                                <div @click="open = ! open">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>

                                <div x-show="open"
                                        x-transition:enter="transition ease-out duration-200"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="absolute z-50 mt-2 w-48 rounded-md shadow-lg ltr:origin-top-right rtl:origin-top-left end-0"
                                        style="display: none;"
                                        @click="open = false">
                                    <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                        <a href="{{ route('profile.edit') }}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                            {{ __('Perfil') }}
                                        </a>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();"
                                                    class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                                {{ __('Cerrar sesion') }}
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-1 flex items-center sm:hidden">
                            
                            <button id="menu-btn" aria-expanded="false" class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-black shadow-md active:bg-gray-50 focus:outline-none transition-colors">
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                            <div id="menu-panel" class="hidden absolute right-3 top-14 w-48 origin-top-right rounded-xl bg-white py-2 shadow-lg ring-1 ring-black/5 focus:outline-none z-50">
                                <a href="{{ route('inicio') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Inicio</a>
                                <a href="{{ route('reportes') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Reportes</a>
                                <a href="{{ route('soporteAyuda') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Soporte / ayuda</a>
                                <a href="{{ route('contacto') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Contacto</a>

                                <div class="my-1 border-t-2 border-gray-100"></div>

                                @if (Route::has('login'))
                                <nav class="flex flex-col">
                                    @auth
                                    <!-- User Info -->
                                    
                                    <div class="my-1 border-t border-gray-100"></div>

                                    <!-- Dashboard Link -->
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm {{ request()->routeIs('dashboard') ? 'text-blue-600 bg-gray-50 font-medium' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }} transition-colors">
                                        {{ __('Dashboard') }}
                                    </a>

                                    <!-- Profile Link -->
                                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">
                                        {{ __('Profile') }}
                                    </a>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                                class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                    @else
                                    <a href="{{route('loginUser')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Ingresar</a>
                                    @if (Route::has('registro'))
                                    <a href="{{route('registro')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">Registrarse</a>
                                    @endif
                                    @endauth
                                </nav>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                

            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                {{ __("You're logged in!") }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
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
</html>
