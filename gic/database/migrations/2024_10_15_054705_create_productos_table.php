<?php

use Illuminate\Container\Attributes\DB;
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
        
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');  
            $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade');  
            $table->integer('stock');
            $table->boolean('estado')->default(true);
            $table->decimal('costo_unitario', 10, 2)->default(0.00);
            $table->decimal('precio', 10, 2)->default(0.00);
            $table->string('codigo_barra', 13)->unique();
            $table->date('fecha_creacion')->default(now());
            $table->date('fecha_actualizacion')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
