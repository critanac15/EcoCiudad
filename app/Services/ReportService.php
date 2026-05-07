<?php
namespace App\Services;

use App\Models\Report;

class ReportService {
    /**
     * Obtiene reportes con filtros opcionales.
     * Esta lógica se extrae del controlador para que sea reutilizable y fácil de testear.
     */
    public function getAllReports($filters = []){
        // Iniciamos una consulta base sobre el modelo Report
        $query = Report::query();

        // Aplicamos filtros dinámicos: si el usuario envió un nombre, filtramos por 'LIKE'
        if (!empty($filters['username'])){
            $query->where('username', 'like', '%' . $filters['username'] . '%');
        }
        
        // Si envió una fecha, filtramos exactamente por ese día
        if (!empty($filters['date'])){
            $query->whereDate('report_date', $filters['date']);
        }

        // Retornamos los resultados ordenados por fecha de forma descendente
        return $query->orderBy('report_date', 'desc')->get();
    }

    /**
     * Crea un nuevo reporte en la base de datos.
     */
    public function storeReport(array $data){
        return Report::create($data);
    }
}