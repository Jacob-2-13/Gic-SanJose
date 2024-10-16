<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = [
        'producto_id',
        'cliente_id',
        'precio',
        'cantidad',
        'total',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clienta_id');
    }
}
