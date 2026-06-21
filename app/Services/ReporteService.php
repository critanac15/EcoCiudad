<?php
namespace App\Services;

use App\Models\Reporte;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;

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
    public function storeReport(array $data, string $imageUrl)
    {
        // se encapsula ambas operaciones en una transacción con la sintaxis de laravel
        return DB::transaction(function () use ($data, $imageUrl) {
            
            // se crea el registro físico de la imagen primero
            $imagen = Imagen::create([
                'ruta_imagen' => $imageUrl
            ]);

            //se crea el reporte asignando las IDs correspondientes
            return Reporte::create([
                'titulo'      => $data['titulo'],
                'descripcion' => $data['descripcion'] ?? '',
                'estado'      => $data['estado_'] ?? 'pendiente',
                'report_date' => now(),
                'fecha'       => now(),
                'ubicacion'   => $data['ubicacion'] ?? 'No especificada',
                'id_usuario_' => $data['user_id'],
                'id_imagen_'  => $imagen->id_imagen, // Llave foránea vinculada
            ]);
        });
    }
        
    
}