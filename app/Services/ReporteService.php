<?php
namespace App\Services;

use App\Models\Reporte;

class ReporteService {
    /**
     * Obtiene reportes con filtros opcionales.
     * Esta lógica se extrae del controlador para que sea reutilizable y fácil de testear.
     */
    public function getAllReports($filters = []){
        // Iniciamos una consulta base sobre el modelo Report
        $query = Reporte::query();

        // Aplicamos filtros dinámicos: si el usuario envió un nombre, filtramos por 'LIKE'
        if (!empty($filters['id_usuario->name'])){
            $query->where('id_usuario->name', 'like', '%' . $filters['id_usuario->name'] . '%');
        }
        
        // Si envió una fecha, filtramos exactamente por ese día
        if (!empty($filters['fecha'])){
            $query->whereDate('report_date', $filters['fecha']);
        }

        // Retornamos los resultados ordenados por fecha de forma descendente
        return $query->orderBy('report_date', 'desc')->get();
    }

    /**
     * Crea un nuevo reporte en la base de datos.
     */
    public function storeReport(array $data){
        return Reporte::create($data);
    }
}