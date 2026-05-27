<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReportService;

class ReportController extends Controller
{
    // ./vendor/bin/sail artisan make:controller ReportController
    
    protected $reportService;

    // Inyectamos el servicio en el constructor. 
    // Esto se conoce como "Inyección de Dependencias".
    public function __construct(ReportService $reportService){
        $this->reportService = $reportService;
    }

    public function index(Request $request){
        // Capturamos solo los parámetros que nos interesan para filtrar
        $filters = $request->only(['username','date']);
        
        // Delegamos la obtención de datos al servicio
        $reports = $this->reportService->getAllReports($filters);

        // Retornamos la vista enviando la colección de reportes
        return view('reportes', compact('reports'));
    }
}