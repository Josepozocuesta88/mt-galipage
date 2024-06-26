<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido_linea;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    public $timestamps = false;


    protected $fillable = [
        'cliente_id',
        'accclicod',
        'acccencod',
        'estado',
        'fecha',
        'subtotal',
        'total',
    ];

    public function pedidos_lineas()
    {
        return $this->hasMany(Pedido_linea::class, 'pedido_id', 'id');
    }
}
