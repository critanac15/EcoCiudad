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

        // Si el usuario envió un nombre para buscar, aplicamos este filtro.
        // "whereHas" nos permite buscar en otra tabla relacionada. En este caso, busca reportes donde el "usuario" (el autor) 
        // tenga un nombre que coincida con lo que se escribió en la búsqueda.
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
        // DB::transaction funciona como una operación de "todo o nada".
        // O se guarda TODO correctamente (la imagen y el reporte), o no se guarda NADA.
        // Esto evita que tengamos imágenes guardadas sin un reporte al que pertenezcan, o viceversa, si ocurre algún error a mitad de camino.
        return DB::transaction(function () use ($data, $imageUrl) {
            
            // Paso 1: Creamos el registro de la imagen en la base de datos.
            // Aquí solo estamos guardando el enlace web de la imagen, no el archivo pesado.
            $imagen = Imagen::create([
                'ruta_imagen' => $imageUrl
            ]);

            // Paso 2: Creamos el registro del reporte principal.
            // Y conectamos la imagen recién guardada pasándole su ID ($imagen->id_imagen).
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