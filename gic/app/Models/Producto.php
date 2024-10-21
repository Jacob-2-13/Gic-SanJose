<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $categoria_id
 * @property $proveedor_id
 * @property $stock
 * @property $estado
 * @property $costo_unitario
 * @property $precio
 * @property $codigo_barra
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Compra[] $compras
 * @property Proveedore $proveedore
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'categoria_id' => 'required',
		'proveedor_id' => 'required',
		'stock' => 'required',
		'estado' => 'required',
		'costo_unitario' => 'required',
		'precio' => 'required',
		'codigo_barra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','categoria_id','proveedor_id','stock','estado','costo_unitario','precio','codigo_barra'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'producto_id', 'id');
    }
    

}
