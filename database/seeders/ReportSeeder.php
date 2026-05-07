<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;
class ReportSeeder extends Seeder
{
    public function run(): void
    {
        // Creamos registros manuales para probar que la vista y los filtros funcionen
        Report::create([
            'username' => 'Delegado',
            'comment' => 'Primer reporte de prueba',
            'report_date' => now(), // Fecha actual
            'image_path' => 'default.jpg',
        ]);

        Report::create([
            'username' => 'Cueva',
            'comment' => 'Segundo reporte de prueba',
            'report_date' => now()->subDay(), // Simula que fue ayer
            'image_path' => 'default2.jpg',
        ]);
    }
}