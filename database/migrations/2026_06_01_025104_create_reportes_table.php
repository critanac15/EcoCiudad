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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id('id_reporte');
    
            //para las claves forameas
            //constrained= hace referencia a la tabla
            //onDelete('cascade')= si se borra un registro se borra todo lo relacionado a ese registro
            //nullable= permite que este vacio
            //onDelete('setnull')= permite que al borrar el dato en la misma DB no afecte en nada.
            $table->foreignId('id_usuario_')->constrained('users','id_usuario')->onDelete('cascade');
            $table->foreignId('id_imagen_')->nullable()->constrained('imagens', 'id_imagen')->onDelete('set null');
            
            //otras variables
            $table->date('fecha');
            $table->string('ubicacion');
            $table->string('estado')->default('pendiente');
            $table->string('titulo');
            $table->text('descripcion');
            $table->timestamp('report_date');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
