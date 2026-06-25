<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReporteService;
use App\Models\Reporte;
use Cloudinary\Cloudinary;

class ReporteController extends Controller
{
    //
    // ./vendor/bin/sail artisan make:controller ReportController
    
    protected $reporteService;

    // Inyectamos el servicio en el constructor.
    // Esto se conoce como "Inyección de Dependencias".
    public function __construct(ReporteService $reporteService)
    {
        $this->reporteService = $reporteService;
    }

    public function index(Request $request)
    {

        //Guardar datos en una variable para las foregein keys
        // Capturamos solo los parámetros que nos interesan para filtrar
        $filters = $request->only(['nombre','date','estado_']);

        // Delegamos la obtención de datos al servicio
        $reporte = $this->reporteService->getAllReports($filters);

        // Cargas las relaciones (eager loading) a la colección ya filtrada
        $reporte->load(['usuario', 'imagen']);

        // Retornas solo la variable unificada
        return view('reportes', compact('reporte'));
    }
    
    public function create()
    {
        return view('reportes.create');
    }
   public function store(Request $request)
    {
        // Validación estricta antes de tocar cualquier servicio externo.
        // Aquí verificamos que el usuario no nos envíe información vacía o archivos que no sean imágenes.
        // "$request" contiene toda la información que el usuario llenó en el formulario.
        $request->validate([
            'titulo'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'ubicacion'   => 'nullable|string|max:255',
            'estado_'     => 'nullable|string|max:50',
            'date'        => 'nullable|date',
            'imagen'      => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        try {
            
            // Guardar la imagen en la nube (Cloudinary)
            // Se envía el archivo de imagen directamente a la plataforma Cloudinary para no saturar nuestro propio servidor.
            // cloudinary()->uploadApi() accede directamente a la SDK oficial.
            $uploadResult = cloudinary()->uploadApi()->upload($request->file('imagen')->getRealPath(), [
                //folder y reportes _sistema son apartados donde se guardan las imagenes subidas por el usuario en el mismo cloudinary
                'folder' => 'reportes_sistema'
            ]);
            
            // Obtenemos el link seguro (HTTPS) de la imagen que ya está en la nube.
            // Esto es lo que guardaremos en nuestra base de datos (solo el texto del enlace), no la imagen pesada.
            $imageUrl = $uploadResult['secure_url'];

            // Obtener datos filtrados del formulario
            $data = $request->only(['titulo', 'descripcion', 'estado_', 'date', 'ubicacion']);
            
            // Asignación del usuario autenticado.
            // auth()->id() nos da el número de identificación del usuario que está usando la página ahora mismo.
            // Así sabemos a quién pertenece este nuevo reporte.
            $data['user_id'] = auth()->id(); 

            // Pasamos la información recolectada (datos del formulario y el link de la imagen) al "Servicio".
            // El controlador solo recibe y valida, pero es el Servicio quien se encarga de guardar todo en la base de datos.
            $this->reporteService->storeReport($data, $imageUrl);

            return redirect()->route('reportes')->with('exitoso', 'Reporte creado exitosamente.');

        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrió un fallo inesperado: ' . $e->getMessage() . ' en ' . $e->getFile() . ':' . $e->getLine());
        }
    }
}
