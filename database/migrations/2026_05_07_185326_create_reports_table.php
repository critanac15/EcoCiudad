<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('username'); // Nombre del usuario que reporta
            $table->text('comment'); // Comentario extenso
            $table->string('image_path')->nullable(); // Ruta de la imagen (opcional)
            $table->timestamp('report_date'); // Fecha y hora específica del suceso
            $table->timestamps(); // Crea created_at y updated_at automáticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
