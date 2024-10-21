<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $producto_id
 * @property $proveedor_id
 * @property $fecha_compra
 * @property $cantidad_comprada
 * @property $costo_unitario
 * @property $total_compra
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'proveedor_id' => 'required',
		'fecha_compra' => 'required',
		'cantidad_comprada' => 'required',
		'costo_unitario' => 'required',
		'total_compra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','proveedor_id','fecha_compra','cantidad_comprada','costo_unitario','total_compra'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedor_id');
    }
    

}
