<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{

    use HasFactory;

    protected $table = 'compras';

    protected $fillable = [
        'producto_id',
        'proveedor_id',
        'fecha_compra',
        'cantidad_comprada',
        'costo_unitario',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }


}
