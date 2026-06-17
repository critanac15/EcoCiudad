<?php
namespace App\Services;

use App\Models\Reporte;

class ReporteService
{
    /**
     * Obtiene reportes con filtros opcionales.
     * Esta lógica se extrae del controlador para que sea reutilizable y fácil de testear.
     */
    public function getAllReports($filters = [])
    {
        // Iniciamos una consulta base sobre el modelo Report
        $query = Reporte::query();

        // Aplicamos filtros dinámicos: si el usuario envió un nombre, filtramos por 'LIKE'
        //Uso de whereHas para buscar en la relación 'usuario'
        if (!empty($filters['nombre'] ))
        {
            $query->whereHas('usuario', function( $q ) use ($filters) 
            {
                $q->where('name', 'like', '%' . $filters['nombre'] . '%');
            });
        }
        
        // Si envió una fecha, filtramos exactamente por ese día
        if (!empty($filters['date']) )
        {
            $query->whereDate('report_date', $filters['date']);
        }

        //Para la parte de estados
        if( !empty($filters['estado_']) )
        {
            $query->where('estado', 'like', '%' . $filters['estado_'] . '%');
        }
        // Retornamos los resultados ordenados por fecha de forma descendente
        return $query->orderBy('report_date', 'desc')->get();
    }

    /**
     * Crea un nuevo reporte en la base de datos.
     */
    public function storeReport(array $data)
    {
        return Reporte::create($data);
    }
}