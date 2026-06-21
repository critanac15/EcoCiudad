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
        // Validación estricta antes de tocar cualquier servicio externo
        $request->validate([
            'titulo'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'ubicacion'   => 'nullable|string|max:255',
            'estado_'     => 'nullable|string|max:50',
            'date'        => 'nullable|date',
            'imagen'      => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        try {
            
            // se usa la API de subida oficial ya que en la versión 3 de cloudinary-laravel
            // la función ->storeOnCloudinary() fue removida.
            // cloudinary()->uploadApi() accede directamente a la SDK oficial.
            $uploadResult = cloudinary()->uploadApi()->upload($request->file('imagen')->getRealPath(), [
                //folder y reportes _sistema son apartados donde se guardan las imagenes subidas por el usuario en el mismo cloudinary
                'folder' => 'reportes_sistema'
            ]);
            
            // Obtenemos el link seguro (HTTPS) de la respuesta que es un array
            $imageUrl = $uploadResult['secure_url'];

            // Obtener datos filtrados del formulario
            $data = $request->only(['titulo', 'descripcion', 'estado_', 'date', 'ubicacion']);
            
            // Asignación del usuario autenticado de la sesión de Laravel
            $data['user_id'] = auth()->id(); 

            // Pasar la responsabilidad del guardado relacional al Service la variable data y imageURL
            $this->reporteService->storeReport($data, $imageUrl);

            return redirect()->route('reportes')->with('exitoso', 'Reporte creado exitosamente.');

        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrió un fallo inesperado: ' . $e->getMessage() . ' en ' . $e->getFile() . ':' . $e->getLine());
        }
    }
}
