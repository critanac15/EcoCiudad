<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Asset ubica la ruta -->
    <link rel="icon" type="image/svg+xml" href="{{asset('logo.svg')}}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @keyframes aparecer {
            from{opacity: 0;}
            to{opacity: 1;}
        }
        #mostrar_register{
            animation: aparecer 1s;
        }
       
    </style>
</head>

<body class=" min-h-screen flex justify-center items-center p-6">
    <div id="mostrar_register" class="w-full max-w-5xl flex flex-col gap-4">

        <div class="self-start">
            <a href="{{route('inicio')}}" class="flex items-center gap-2 text-black font-medium hover:underline hover:underline-offset-4 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Volver a la pantalla de inicio
            </a>
        </div>
        <div class="grid xl:grid-cols-2  overflow-hidden shadow-2xl bg-white">
            
            <div class=" bg-white shadow-xl xl:px-20 xl:py-16  xl:flex xl:justify-center xl:items-start">
                <form action="/php01/resources/views/registro.blade.php" method="post" class="w-full ">
                    @csrf
                    <legend class="font-semibold  xl:text-3xl xl:mb-20 ">Registro</legend>
                    <div class="xl:my-5 flex flex-col xl:gap-y-7">
                        <div>
                            <fieldset class="flex justify-between items-center xl:gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            
                            <input type="text" name="user_name" required class="xl:px-3 xl:py-1 outline-0 border-0 focus:ring-0 xl:rounded-xl  xl:w-72 xl:h-10" placeholder="Nombre de usuario">
                        </fieldset>
                        <hr>
                    </div>
                    <div>
                        <fieldset class="flex justify-between items-center xl:gap-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="size-6">
                                <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                            <input type="email" name="email" required placeholder="ejemplo@gmail.com" class="xl:px-3 xl:py-1 focus:ring-0 outline-0 border-0 xl:rounded-xl  xl:w-72 xl:h-10">
                        </fieldset>
                        <hr>
                    </div>
                    <div>
                        
                        <fieldset class="flex justify-between xl:gap-3 items-center">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-black">
                                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                            </svg>
                            <input type="password" name="password" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl focus:ring-0 border-0 xl:w-72 xl:h-10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required minlength="8" title=" Debe de tener mas de 8 caracteres, incluyendo numeros, letras mayusculas y minscular" placeholder="Contraseña">
                        </fieldset>
                        <hr>
                    </div>
                </div>
                <div class="xl:mt-12 mt-8">
                    <button type="submit" class="bg-[#3a07a1] w-full xl:py-3 rounded-xl hover:bg-[#3000cc] hover:cursor-pointer hover:duration-150 text-white font-semibold">
                        Registrar
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-[url({{ asset('fondo_imagen_login_register.webp') }})] bg-cover bg-center text-white xl:px-16 xl:py-20 p-8 flex flex-col justify-start min-h-[400px]">
                <h2 class="xl:text-4xl text-3xl font-bold mb-4">Bienvenido a EcoCiudad</h2>
                <p class="text-sm xl:text-base leading-relaxed text-purple-100">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In harum asperiores inventore distinctio sed odit. Tempora sed sunt sapiente doloribus voluptates voluptas.
                </p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>