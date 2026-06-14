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

    public function index(Request $request){

        //Guardar datos en una variable para las foregein keys
        $datosUsuario_reporte=Reporte::with(['usuario','imagen'])->get();
        // Capturamos solo los parámetros que nos interesan para filtrar
        $filters = $request->only(['id_usuario->name','fecha']);
        
        // Delegamos la obtención de datos al servicio
        $reporte = $this->reporteService->getAllReports($filters);

        // Retornamos la vista enviando la colección de reportes con compact
        return view('reportes', compact('reporte','datosUsuario_reporte'));
    }
}
