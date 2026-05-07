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
<body>
    <div class="flex justify-center h-screen items-center">
        <div class="xl:flex xl:flex-col xl:gap-y-5">
            <div class="xl:flex xl:font-light shadow-xl xl:px-10 xl:py-10 xl:gap-15 xl:rounded-2xl">
                <form action="login.blade.php">
                        <legend class="text-center xl:text-3xl xl:my-10">Registro de Usuario</legend>
                    <div class="xl:my-5 xl:flex xl:flex-col xl:gap-y-5">
                        <fieldset class="xl:flex xl:justify-between items-center xl:gap-3">
                            <label for="email_registro">Correo:</label>
                            <input type="email" placeholder="ejemplo@gmail.com" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-65">
                        </fieldset>
                        <fieldset class="xl:flex xl:justify-between xl:gap-3 items-center">
                            <label for="password_registro">Contraseña: </label>
                            <input type="password" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-65">
                        </fieldset>
                        <fieldset class="xl:flex xl:justify-between items-center xl:gap-3">
                            <label for="password_registro">Contraseña: </label>
                            <input type="password" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-65">
                        </fieldset>
                    </div>
                    <div class="xl:flex justify-center items-end">
                        <button type="submit" class="xl:bg-amber-100 xl:px-4 xl:py-2 rounded-xl hover:bg-amber-300 hover:cursor-pointer hover:duration-150">
                            Registrar
                        </button>
                    </div>
                </form>
                <form action="login.blade.php">
                    <legend class="xl:text-3xl text-center xl:my-10">Inicio de sesion</legend>
                    <div class="xl:my-5 xl:flex xl:flex-col xl:gap-y-5">
                        <fieldset class="xl:flex xl:justify-between xl:gap-3 items-center">
                            <label for="email_inicio">Username</label>
                            <input type="email" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-65">
                        </fieldset>
                        <fieldset class="xl:flex xl:justify-between xl:gap-3 items-center">
                            <label for="password_inicio">Contraseña: </label>
                            <input type="password" name="" id="" class="xl:px-3 xl:py-1 outline-0  xl:rounded-xl xl:border-gray-300 xl:w-65">
                        </fieldset>
                    </div>
                    <div class="xl:flex justify-center ">
                        <button type="submit" class="xl:bg-amber-100 xl:px-4 xl:py-2 rounded-xl hover:bg-amber-300 hover:cursor-pointer hover:duration-150">
                            Ingresar
                        </button>
                    </div>
                </form>
            </div>
            <div class="xl:flex xl:justify-center">
                <a href="{{route('inicio')}}" class="xl:bg-amber-100 xl:px-6 xl:py-2 rounded-xl hover:bg-amber-300 hover:cursor-pointer hover:duration-300 hover:scale-110">Ir a la pagina de Inicio</a>
            </div>
        </div>
        
    </div>
</body>
</html>