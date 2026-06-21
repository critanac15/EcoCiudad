<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="icon" type="image/svg+xml" href="{{ asset('logo.svg') }}">
    <style>
        @keyframes aparecer {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        #mostrar_register {
            animation: aparecer 1s;
        }
    </style>
</head>

<body class="min-h-screen flex justify-center items-center p-6 bg-gray-50">
    <div id="mostrar_register" class="w-full max-w-5xl flex flex-col gap-4">

        <div class="self-start">
            <a href="{{ url()->previous() == url()->current() ? route('inicio')  : url()->previous()}}" class="flex items-center gap-2 text-black font-medium hover:underline hover:underline-offset-4 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Volver a la pantalla de inicio
            </a>
        </div>
        
        <div class="grid xl:grid-cols-2 overflow-hidden shadow-2xl bg-white rounded-xl">
            
            <div class="bg-white xl:px-20 xl:py-16 xl:flex xl:justify-center xl:items-start p-8">
                <form method="POST" action="{{ route('registro') }}" class="w-full">
                    @csrf
                    
                    <legend class="font-semibold text-2xl xl:text-3xl mb-8 xl:mb-12">Registro</legend>
                    
                    <div class="flex flex-col gap-y-6">
                        <div>
                            <legend class="flex justify-between items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                
                                <!-- Se cambió el parametro de value="old('name')" por value="{{ old('name') }}" para prevenir errores de validacion -->
                                
                                <input type="text" name="name" value="{{ old('name') }}" required autofocus class="px-3 py-1 outline-0 border-0 focus:ring-0 rounded-xl w-full xl:w-72 h-10" placeholder="Nombre de usuario">
                            </legend>
                            <hr class="mt-2">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <legend class="flex justify-between items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="size-6">
                                    <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                    <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                                </svg>
                                <!-- Se cambió el parametro de value="old('email')" por value="{{ old('email') }}" para prevenir errores de validacion -->
                                <input type="email" name="email" value="{{ old('email') }}" required placeholder="ejemplo@gmail.com" class="px-3 py-1 focus:ring-0 outline-0 border-0 rounded-xl w-full xl:w-72 h-10">
                            </legend>
                            <hr class="mt-2">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <legend class="flex justify-between gap-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-black">
                                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                </svg>
                                <input type="password" name="password" required class="px-3 py-1 outline-0 rounded-xl focus:ring-0 border-0 w-full xl:w-72 h-10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" title="Debe tener más de 8 caracteres, incluyendo números, letras mayúsculas y minúsculas" placeholder="Contraseña">
                            </legend>
                            <hr class="mt-2">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <legend class="flex justify-between gap-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-black">
                                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                </svg>
                                <input type="password" name="password_confirmation" required class="px-3 py-1 outline-0 rounded-xl focus:ring-0 border-0 w-full xl:w-72 h-10" placeholder="Confirmar Contraseña">
                            </legend>
                            <hr class="mt-2">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-8 flex flex-col gap-4">
                        <button type="submit" class="bg-[#3a07a1] w-full py-3 rounded-xl hover:bg-[#3000cc] hover:cursor-pointer transition-colors duration-150 text-white font-semibold">
                            Registrar
                        </button>
                        <div class="text-center">
                            <a href="{{ route('loginUser') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                                ¿Ya estás registrado? Inicia sesión aquí
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="bg-[url('{{ asset('fondo_imagen_login_register.webp') }}')] bg-cover bg-center text-white xl:px-16 xl:py-20 p-8 flex flex-col justify-start min-h-[400px] xl:block hidden">
                <h2 class="xl:text-4xl text-3xl font-bold mb-4">Bienvenido a EcoCiudad</h2>
                <p class="text-sm xl:text-base leading-relaxed text-purple-100">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In harum asperiores inventore distinctio sed odit. Tempora sed sunt sapiente doloribus voluptates voluptas.
                </p>
            </div>
            
        </div>
    </div>
</body>
</html>