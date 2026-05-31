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
        #mostrar_login{
            animation: aparecer 1s;
        }
        #mostrar_admin{
            animation: aparecer 1s;
        }
    </style>
</head>
<body class="xl:bg-linear-to-bl from-[#950aeb] to-[#321355] xl:bg-no-repeat xl:contrast-100 xl:bg-cover min-h-screen flex justify-center items-center p-6">
    <div class="w-full max-w-5xl flex flex-col gap-4">

        <div class="self-start">
            <a href="{{route('inicio')}}" class="flex items-center gap-2 text-white font-medium hover:underline hover:underline-offset-4 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Volver a la pantalla de inicio
            </a>
        </div>
        <div  class="grid xl:grid-cols-2  overflow-hidden shadow-2xl bg-white h-135">
            <div class="bg-[url({{ asset('fondo_imagen_login_register.webp') }})] bg-cover bg-center text-white xl:px-16 xl:py-20 p-8 flex flex-col justify-start h-[100%]">
                <div class="xl:px-5   justify-start  ">
                    <h2 class="xl:text-4xl text-3xl font-bold mb-4">Bienvenido a EcoCiudad</h2>
                    <p class="text-sm xl:text-base leading-relaxed text-purple-100">Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. In harum asperiores inventore distinctio sed odit. ipsum, dolor sit amet consectetur adipisicing elit. Tempora sed sunt sapiente doloribus voluptates voluptas pariatur, voluptatibus repudiandae. Consectetur, asperiores!</p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center gap-3 xl:py-3">
                    <button id="login_" class=" hover:cursor-pointer hover:underline underline-offset-4 focus:underline ">User /</button>
                    <button id="admin_" class="hover:cursor-pointer hover:underline underline-offset-4 focus:underline ">/ Admin</button>
                </div>
                
                <div id="mostrar_admin" class="hidden">
                    <div  class=" bg-white shadow-xl xl:px-20 xl:py-16  xl:flex xl:justify-center xl:items-start ">
                        <form action="login.blade.php" class="w-full">
                            <legend class="font-semibold  xl:text-3xl xl:mb-20 ">Inicio de sesion</legend>
                            <div class="xl:my-5 xl:flex xl:flex-col xl:gap-y-5">
                                <div>
                                    
                                    <fieldset class="flex justify-between xl:gap-3 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                                    </svg>

                                    <input type="text" name="dni_admin" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl border-0 xl:w-72 xl:h-10" placeholder="Ingrese su dni">
                                </fieldset>
                                <hr>
                            </div>
                            <div>

                                <fieldset class="flex justify-between xl:gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-black">
                                        <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                    </svg>
                                    <input type="password" name="password_Admin" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl border-0 xl:w-72 xl:h-10" placeholder="password">
                                </fieldset>
                                <hr>
                            </div>
                            <div>
                                <a href="#" class="text-violet-500 font-light">¿Olvidaste tu contraseña?</a>
                            </div>
                            </div>
                            <div class="xl:mt-12 mt-8">
                                <button type="submit" class="bg-[#3a07a1] w-full xl:py-3 rounded-xl hover:bg-[#3000cc] hover:cursor-pointer hover:duration-150 text-white font-semibold">
                                    Ingresar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="mostrar_login" class="block ">

                    <div   class=" bg-white shadow-xl xl:px-20 xl:py-16  xl:flex xl:justify-center xl:items-start">
                        <form action="login.blade.php" class="w-full">
                            <legend class="font-semibold  xl:text-3xl xl:mb-20 ">Inicio de sesion</legend>
                        <div class="xl:my-5 xl:flex xl:flex-col xl:gap-y-5">
                            <div>
                                
                                <fieldset class="flex justify-between xl:gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="size-6">
                                        <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                        <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                                    </svg>
                                    <input type="email" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl border-0 xl:w-72 xl:h-10" placeholder="email@gmail.com">
                                </fieldset>
                                <hr>
                            </div>
                            <div>

                                <fieldset class="flex justify-between xl:gap-3 items-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-black">
                                         <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                    </svg>
                                    <input type="password" name="" id="" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl border-0 xl:w-72 xl:h-10" placeholder="password">
                                </fieldset>
                                <hr>
                            </div>
                            <div>
                                <a href="#" class="text-violet-500 font-light">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <div class="xl:mt-12 mt-8">
                            <button type="submit" class="bg-[#3a07a1] w-full xl:py-3 rounded-xl hover:bg-[#3000cc] hover:cursor-pointer hover:duration-150 text-white font-semibold">
                                Ingresar
                            </button>
                        </div>
                        <div class="flex justify-center items-center xl:mt-4">
                            <a href="{{route('registro')}}" class="text-violet-500 font-light">Crear una cuenta nueva ahora</a>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
                    const mostrar_admin=document.getElementById('mostrar_admin');
                    const mostrar_login=document.getElementById('mostrar_login');
                    const login_=document.getElementById('login_');
                    const admin_=document.getElementById('admin_');
                    login_.addEventListener('click',()=>{
                        mostrar_admin.classList.remove('block');
                        mostrar_admin.classList.add('hidden');
                        mostrar_login.classList.remove('hidden');
                        mostrar_login.classList.add('block');
                    });
                                        console.log('prueba');

                    admin_.addEventListener('click',()=>{
                        mostrar_admin.classList.remove('hidden');                        
                        mostrar_admin.classList.add('block');
                        mostrar_login.classList.remove('block');
                        mostrar_login.classList.add('hidden');
                    });
                </script>
</body>
</html>