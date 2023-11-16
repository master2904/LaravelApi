<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'cliente_id',
        'forma_pago',
        'pago',
        'fecha'
    ];
    public function scopeReporte($query){
        
        return $query
                ->join('users','ventas.user_id','users.id')
                ->select('ventas.user_id','users.id','users.nombre','ventas.forma_pago','ventas.pago','ventas.fecha');
    }
}
