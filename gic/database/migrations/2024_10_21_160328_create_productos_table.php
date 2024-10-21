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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 191);
            $table->text('descripcion')->nullable(); // Similar to TextField in Django
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade'); // Foreign key
            $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade');
            $table->unsignedInteger('stock');
            $table->boolean('estado')->default(true);
            $table->decimal('costo_unitario', 10, 2)->default(0.00);
            $table->decimal('precio', 10, 2)->default(0.00);
            $table->string('codigo_barra', 13)->unique();
            $table->timestamps();
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
