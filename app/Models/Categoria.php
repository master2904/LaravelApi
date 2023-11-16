<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo'
    ];
    public function scopeProductosByCategoria($query,$id){
        return $query->join('productos','productos.categoria_id','categorias.id')
                    ->select('productos.descripcion','productos.imagen','productos.stock','productos.precio_venta as precio')
                    ->where('productos.categoria_id',$id);
    }
}
