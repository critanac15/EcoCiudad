<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Asset ubica la ruta -->
    <link rel="icon" type="image/svg+xml" href="{{asset('logo.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="xl:bg-linear-to-bl from-[#04852d] to-[#193c2f] xl:bg-no-repeat xl:contrast-100 xl:bg-cover min-h-screen xl:flex xl:justify-center xl:items-center relative">
    <div class=" xl:absolute xl:top-10 xl:left-10">
        <a href="{{route('inicio')}}" class=" xl:px-4 xl:py-2  hover:underline hover:underline-offset-4 hover:cursor-pointer hover:duration-150 text-white font-bold">Ir a la pagina de Inicio</a>
    </div>
    <div class="xl:flex xl:flex-2  justify-center xl:mx-70 overflow-hidden">
        <div class="bg-white shadow-xl xl:px-20 xl:py-12 xl:flex xl:justify-center xl:items-center">
            <form action="login.blade.php" class="w-full">
                <legend class="text-center xl:text-3xl xl:my-10">Registro de Usuario</legend>
                <div class="xl:my-5 xl:flex xl:flex-col xl:gap-y-5">
                    <fieldset class="xl:flex xl:justify-between items-center xl:gap-3">
                        <label for="email_registro">Correo:</label>
                        <input type="email" placeholder="ejemplo@gmail.com" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-72 xl:h-10">
                    </fieldset>
                    <fieldset class="xl:flex xl:justify-between xl:gap-3 items-center">
                        <label for="password_registro">Contraseña: </label>
                        <input type="password" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-72 xl:h-10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required minlength="8" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter">
                    </fieldset>
                    <fieldset class="xl:flex xl:justify-between items-center xl:gap-3">
                        <label for="password_registro">Contraseña: </label>
                        <input type="password" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-72 xl:h-10">
                    </fieldset>
                </div>
                <div class="xl:flex justify-center items-end">
                    <button type="submit" class="bg-[#205223] xl:px-10 xl:py-2 rounded-xl hover:bg-[#1e7834] hover:cursor-pointer hover:duration-150 text-white">
                        Registrar
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-[url({{ asset('fondo_verde_login.jpg') }})] text-white xl:px-20 xl:pt-20 xl:pb-96 ">
            <div class="xl:px-5   justify-start  ">
                <h2 class="xl:text-5xl font-bold xl:mb-6">Bienvenido a EcoCiudad</h2>
                <p class="xl:text-lg leading-relaxed">Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. In harum asperiores inventore distinctio sed odit. ipsum, dolor sit amet consectetur adipisicing elit. Tempora sed sunt sapiente doloribus voluptates voluptas pariatur, voluptatibus repudiandae. Consectetur, asperiores!</p>
            </div>
        </div>
    </div>
</body>
</html>