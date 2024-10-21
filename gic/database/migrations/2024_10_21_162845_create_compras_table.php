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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade'); 
            $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade'); 
            $table->date('fecha_compra'); // Fecha de la compra
            $table->unsignedInteger('cantidad_comprada'); // Cantidad comprada, no se permiten valores negativos
            $table->decimal('costo_unitario', 10, 2); // Precio con hasta 10 dígitos, 2 decimales
            $table->decimal('total_compra', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
