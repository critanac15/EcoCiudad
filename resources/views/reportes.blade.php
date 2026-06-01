<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoCiudad</title>
    <!-- Importando tailwind - el framwork para css-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Asset ubica la ruta -->
    <link rel="icon" type="image/svg+xml" href="{{asset('logo.svg')}}">
    
    <style>
        @keyframes aparecer {
            from{opacity: 0;}
            to{opacity: 1;}
        }
        #mostrar_div_reporte{
            animation: aparecer 1s;
        }
        #crear_div_reporte{
            animation: aparecer 1s;
        }
    </style>
</head>

<body class="flex flex-col h-full">
    <header class="xl:grid xl:grid-cols-7 bg-[#000000] text-white xl:py-5 xl:px-40 ">
        <div class="xl:flex xl:justify-start xl:items-center ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:size-9">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
            </svg>

            <h1 class="xl:text-2xl">EcoCiudad</h1>
        </div>
        <nav class="xl:flex xl:gap-4 xl:col-span-5 justify-center xl:text-lg">
            <a class="  xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-115 hover:outline-[#6b878d] hover:cursor-pointer" href="{{ route('inicio') }} ">Inicio</a>
            <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-115 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('reportes')}}">Reportes</a>
            <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-115 hover:outline-[#6b878d] hover:cursor-pointer" href="{{route('soporteAyuda')}}">Soporte / ayuda</a>
            <a class="xl:px-3 xl:py-2 xl:rounded-xl hover:underline xl:hover:underline-offset-4 duration-200 xl:hover:scale-115 hover:outline-[#6b878d] hover:cursor-pointer" href="#">Contacto</a>
        </nav>
        <nav class="xl:flex xl:gap-2 items-center ">
            <a href="{{route('registro')}}" class="bg-[#ffffff] xl:px-6 xl:py-2 xl:rounded-sm text-black hover:bg-[#ededed] hover:cursor-pointer duration-150 hover:scale-105">Registrarse  </a>
            <a href="{{route('loginUser')}}" class="bg-[#4d4d4d] xl:px-6 xl:py-2 xl:rounded-sm text-white hover:bg-[#3e3e3e] hover:cursor-pointer duration-150 hover:scale-105">Ingresar</a>
        </nav>
        
    </header>
    <!-- CONTENEDOR DE TARJETAS (GRID) -->
    <!-- Se aplica un sistema de rejilla: 1 columna en móvil y 3 columnas en pantallas medianas (md) en adelante -->
    
<main class="xl:px-40 xl:py-20   bg-[#ffffff] flex flex-col min-h-screen">
    <div class="xl:flex xl:gap-5 xl:mb-10 text-white ">
        <div>
            <button id="ver_reporte"  class="bg-violet-700  xl:py-3 xl:px-4  hover:cursor-pointer rounded-xl xl:hover:scale-105 transition-all duration-150">Ver todos los reportes</button>            
        </div>
        <div>
            <button id="crear_reporte" class="bg-violet-700  xl:py-3 xl:px-4 hover:cursor-pointer rounded-xl xl:hover:scale-105 transition-all duration-150">Crear nuevo reporte +</button>
        </div>
    </div>
    


<!---Creando la estructura para ver reportes-->
    <div class="block" id="mostrar_div_reporte">
        <div class="xl:flex ">
            <form action="{{route('reportes')}}" method="GET" class="flex xl:gap-4 xl:mb-10">
                <div class="flex flex-col gap-y-2 w-full max-w-sm">
                    <select id="distrito" name="distrito" class="border border-gray-300 rounded-xl px-4 py-3 bg-white text-gray-700 hover:border-gray-400 focus:outline-none  cursor-pointer duration-200">
                        <option value="" disabled selected>Seleccione su distrito</option>
                        <option value="arequipa">Arequipa (Cercado)</option>
                        <option value="alto_selva_alegre">Alto Selva Alegre</option>
                        <option value="cayma">Cayma</option>
                        <option value="cerro_colorado">Cerro Colorado</option>
                        <option value="hunter">Jacobo Hunter</option>
                        <option value="jose_luis_bustamante">José Luis Bustamante y Rivero</option>
                        <option value="mariano_melgar">Mariano Melgar</option>
                        <option value="miraflores">Miraflores</option>
                        <option value="paucarpata">Paucarpata</option>
                        <option value="socabaya">Socabaya</option>
                        <option value="yanahuara">Yanahuara</option>
                    </select>
                </div>
                <div class="flex flex-col gap-y-2 w-full max-w-sm">
                    <select id="estado" name="estado" class="border border-gray-300 rounded-xl px-4 py-3 bg-white text-gray-700 hover:border-gray-400 focus:outline-none  cursor-pointer duration-200">
                        <option value="" disabled selected>Seleccione el estado</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="solucionado">Solucionado</option>
                        <option value="en_abandono">En abandono</option>
                    </select>
                </div>
                
                <input type="text" name="username" placeholder="Buscar por usuario" class="border border-gray-300 rounded-xl px-4 py-3 bg-white text-gray-700 hover:border-gray-400 focus:ring-0  focus:outline-0 hover:cursor-text duration-200"/>
                <input type="date" name="date" class="border border-gray-300 rounded-xl px-4 py-3 bg-white text-gray-700 hover:border-gray-400 focus:outline-none  cursor-text duration-200 ">
                <button type="submit" class="bg-blue-500  font-bold xl:px-5 hover:cursor-pointer rounded-xl text-white xl:hover:scale-105 transition-all duration-150">Filtrar</button>
            </form>
        </div>
        <div class="xl:grid xl:grid-cols-3 md:grid-cols-3 gap-9">
            
            <div class=" xl:p-5 rounded-xl shadow-xl relative">
                @php
                    $estado = 'solucionado';//objeto de prueba, luego poner el valor de la DB 
                    
                    $colorClase = '';
                    if($estado === 'solucionado') {
                        $colorClase = 'bg-green-400';
                    } elseif($estado === 'pendiente') {
                        $colorClase = 'bg-gray-400';
                    } elseif($estado === 'en abandono') {
                        $colorClase = 'bg-red-500';
                    }
                @endphp
                
                <span class="{{$colorClase}} absolute -right-3 -top-3 xl:px-3 xl:py-1 rounded-lg">{{$estado}}</span>
                <div class="flex gap-4 xl:mb-2">
                    <h2 class="text-gray-600 text-sm">username</h2>
                    <div class="text-gray-600 text-sm">115/15/2025</div>
                </div>
                <h3 class="xl:text-2xl">Acumulacion de desmonte</h3>
                <p class="text-gray-600 text-sm xl:mb-2">Ubicacion localizada</p>
                <div>
                    <p>commentariooo</p>
                </div>
                <figure class="flex justify-center items-center">
                    <img src="https://imgs.search.brave.com/zfMtD_YwkW0xG0hyPmu_65H1onSb_Bw48ZQMfY63qbc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wNTEv/NDkwLzgxMS9zbWFs/bC9sZXR0ZXItbi1m/b250LW9yYW5nZS1m/cmFtZS11cHBlcmNh/c2UtZm9yLWNoaWxk/cmVuLXRveS1sZWFy/bmluZy1vbi1zb2xp/ZC1iYWNrZ3JvdW5k/LXBob3RvLkpQRw" alt="Reporte" class="rounded-xl"/>
                </figure>
                
            </div>
            
        </div>
    </div>
<!------------------------------------------>

<!---Creando la estructura para poder crear reportes-->
    <form class="hidden" id="crear_div_reporte" method="post">
        
        <div class="xl:grid xl:grid-cols-2 xl:gap-10 ">
            <div class="relative overflow-hidden border-dashed border-2 bg-white border-gray-300 rounded-xl flex justify-center items-center">
                <input id="input_foto" type="file" name="imagen" accept="image/*" class="hover:scale-105 duration-150 transition-all hover:cursor-pointer xl:py-2 xl:px-1 rounded-xl bg-gray-300 block" >
                <img id="vista_previa" src="" class="hidden rounded-xl">
                <div id="eliminar_foto" class="hover:cursor-pointer text-red-700 font-bold  absolute xl:top-0 xl:right-0 hidden xl:py-1 xl:px-2 bg-white rounded-lg hover:bg-gray-50 hover:shadow-xl transition-all duration-150 ">
                    <button type="button"  class=" text-2xl  hover:cursor-pointer">x</button>
                </div>
            </div>
            <script>
                const vista_previa=document.getElementById('vista_previa');
                const input_foto=document.getElementById('input_foto');
                const eliminar_foto=document.getElementById('eliminar_foto');

                //con una url temporal
                input_foto.addEventListener('change',(event)=>{
                    //captura el archivo seleccionado en forma de array
                    const archivo=event.target.files[0];
                    if(archivo){
                        const url_temporal=URL.createObjectURL(archivo);
                        vista_previa.src=url_temporal;
                        vista_previa.classList.remove('hidden');
                        vista_previa.classList.add('block');
                        input_foto.classList.remove('block');
                        input_foto.classList.add('hidden');
                        eliminar_foto.classList.remove('hidden');
                        eliminar_foto.classList.add('block');

                    }
                });

                eliminar_foto.addEventListener('click',()=>{
                    if(vista_previa.src){
                        URL.revokeObjectURL(vista_previa.src);
                    }
                    vista_previa.src="";
                    input_foto.value="";
                    eliminar_foto.classList.remove('block');
                    eliminar_foto.classList.add('hidden');
                    input_foto.classList.remove('hidden');
                    input_foto.classList.add('block');
                    
                });
            </script>  
            <div class="flex flex-col justify-center xl:gap-y-2">
                <div class="grid xl:grid-cols-4">
                    <div class="xl:col-span-3 xl:mb-3">
                        <input disabled class="xl:py-2 text-gray-500 bg-gray-100  border-gray-300 rounded-lg xl:px-2 w-full" name="nombre" placeholder="Subido por:  cristian"/>
                    </div>
                    <div class="col-span-3 justify-center xl:gap-5">
                        <input type="text" id="direccion" name="direcion" placeholder="Distrito - lugar - referencia" class="bg-gray-100 focus:ring-0    xl:rounded-lg xl:pl-22 border-1 xl:py-2 w-full hover:outline-0"/>
                    </div>
                    <div class="col-span-1 justify-end items-center flex">
                        <button type="button" id="btn_direccion" class=" xl:px-4 xl:py-2 rounded-lg hover:cursor-pointer bg-gray-300 hover:scale-105 duration-150 ">Usar mi ubicacion</button>
                    </div>
                    <script>
                        const btn_direccion=document.getElementById('btn_direccion');
                        btn_direccion.addEventListener('click',()=>{
                        //si el navegador no acepta la localizacion
                            if(!navigator.geolocation){
                                alert('no se puede acceder a la ubicacion');
                                return;
                            };

                            navigator.geolocation.getCurrentPosition(
                                //async para decirle al navegador que la siguiente peticion tomara tiempo
                                async (position)=>{
                                    //obteniendo las coordenadas
                                    const latitud_ = position.coords.latitude; 
                                    const longitud_ = position.coords.longitude;
                                    try{
                                        //consultando a una api gratuita para obtener la ubicacion
                                        //await para hacer paso a paso la peticion y no de corrido
                                        const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitud_}&lon=${longitud_}&zoom=10&addressdetails=1`);      
                                        //se lee el json una sola vez                                 
                                        const datas=await response.json();

                                        //extraer datos del lugar
                                        const info=datas.address;

                                        //obtener datos del lugar
                                        const pais=info.country || '';
                                        const departamento=info.state || '';
                                        const ciudad=info.city || info.county || ''; 
                                        const distrito =info.suburb || info.city_district || info.town || '';
                                        const lugar = info.road || info.pedestrian || info.amenity || '';
                                        const referencia = info.neighbourhood || info.residential || '';

                                        //juntar todo en un arreglo por asi decirlo filtrarlo en un formato de texto omitiendo caracteres vacios ''
                                        const partes = [pais,departamento,ciudad,distrito, lugar, referencia].filter(texto => texto !== '');
                                        const direccionFormateada = partes.join(' - ');//se unse todo mediante
                                        
                                        
                                        //insertando datos en el input
                                        const input_direccion=document.getElementById('direccion');
                                        input_direccion.value=direccionFormateada;

                                    } catch (error) {
                                        alert("no se pudo traducir las coordenadas");
                                        console.error(error);
                                    }
                                },
                                (error) => {
                                        alert('error inesperado');
                                    }
                                )
                        });
                    </script>

                </div>
                <div class="col-span-4 overflow-y-scroll justify-center items-center grid xl:grid-cols-4" >
                    <textarea name="descripcion"  class="bg-gray-100 rounded-xl xl:p-3 text-wrap border-1 hover:outline-0   col-span-4" placeholder="agrega una breve descripcion" rows="4"></textarea>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center xl:my-3">
            <button type="submit" class="bg-violet-700 text-white xl:py-2 rounded-xl xl:px-16 hover:scale-105 duration-150 transition-all hover:cursor-pointer">Crear reporte</button>
        </div>
    </form>    
</main>
<footer class="bg-black xl:grid xl:grid-cols-4 text-white xl:py-10 xl:px-40 xl:gap-10 ">
        <div class="xl:flex xl:flex-col xl:gap-y-5">
            <div class="">

                <h2 class=" font-bold xl:text-3xl">EcoCiudad</h2>
                
            </div>

            <div>
                <h5 class="xl:text-lg">Nuestras redes sociales</h5>
                <div class="xl:flex xl:gap-5 xl:mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" class="bg-white xl:size-8 rounded-lg">
                        <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" class="bg-white xl:rounded-lg xl:size-8">
                        <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" class="bg-white  xl:rounded-lg xl:size-8">
                        <path d="M19.077,4.928C17.191,3.041,14.683,2.001,12.011,2c-5.506,0-9.987,4.479-9.989,9.985 c-0.001,1.76,0.459,3.478,1.333,4.992L2,22l5.233-1.237c1.459,0.796,3.101,1.215,4.773,1.216h0.004 c5.505,0,9.986-4.48,9.989-9.985C22.001,9.325,20.963,6.816,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186 c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767c-0.125-0.167-1.019-1.353-1.019-2.581 S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006c0.178,0.007,0.375,0.016,0.562,0.431 c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416c-0.125,0.146-0.262,0.325-0.374,0.437 c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728c0.954,0.85,1.757,1.113,2.007,1.239 c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812 c0.25,0.125,0.416,0.187,0.478,0.291C17.106,14.471,17.106,14.971,16.898,15.554z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="bg-white xl:size-8 xl:rounded-lg">
                        <path d="M16,2c-7.732,0-14,6.268-14,14s6.268,14,14,14,14-6.268,14-14S23.732,2,16,2Zm6.489,9.521c-.211,2.214-1.122,7.586-1.586,10.065-.196,1.049-.583,1.401-.957,1.435-.813,.075-1.43-.537-2.218-1.053-1.232-.808-1.928-1.311-3.124-2.099-1.382-.911-.486-1.412,.302-2.23,.206-.214,3.788-3.472,3.858-3.768,.009-.037,.017-.175-.065-.248-.082-.073-.203-.048-.29-.028-.124,.028-2.092,1.329-5.905,3.903-.559,.384-1.065,.571-1.518,.561-.5-.011-1.461-.283-2.176-.515-.877-.285-1.574-.436-1.513-.92,.032-.252,.379-.51,1.042-.773,4.081-1.778,6.803-2.95,8.164-3.517,3.888-1.617,4.696-1.898,5.222-1.907,.116-.002,.375,.027,.543,.163,.142,.115,.181,.27,.199,.379,.019,.109,.042,.357,.023,.551Z" fill-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-span-2 xl:flex xl:items-center">
            <div>
                <h4 class="font-bold text-lg">Acerca de Nosotros</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, tempora? Exercitationem sapiente perspiciatis cum suscipit, autem dolorum ipsam natus omnis?</p>
            </div>

        </div>
        <div class="xl:flex xl:flex-col xl:gap-y-5">
            <div>
                <h5 class="font-bold text-lg">Telefono:</h5>
                <p>+51 987654321</p>
            </div>
            <div>
                <h5 class="font-bold xl:text-lg">Email:</h5>
                <p>ecociudad@gmail.com</p>
            </div>
        </div>
    </footer>
<script>
        const ver=document.getElementById('ver_reporte');
        const crear=document.getElementById('crear_reporte');
        const div_mostrar=document.getElementById('mostrar_div_reporte');
        const div_crear=document.getElementById('crear_div_reporte');

        ver.addEventListener('click',()=>{
            div_mostrar.classList.remove('hidden');
            div_mostrar.classList.add('block');
            div_crear.classList.remove('block');
            div_crear.classList.add('hidden');
        });
        crear.addEventListener('click',()=>{
            div_crear.classList.remove('hidden');
            div_crear.classList.add('block');
            div_mostrar.classList.remove('block');
            div_mostrar.classList.add('hidden');

        });
    </script>
</body>

</html>