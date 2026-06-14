<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReporteService;
use App\Models\Reporte;

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
        $datosUsuario_reporte=Reporte::with(['usuario','imagen'])->get();
        // Capturamos solo los parámetros que nos interesan para filtrar
        $filters = $request->only(['nombre','date','estado_']);

        // Delegamos la obtención de datos al servicio
        $reporte = $this->reporteService->getAllReports($filters);

        // Cargas las relaciones (eager loading) a la colección ya filtrada
        $reporte->load(['usuario', 'imagen']);

        // Retornas solo la variable unificada
        return view('reportes', compact('reporte'));
    }
}
