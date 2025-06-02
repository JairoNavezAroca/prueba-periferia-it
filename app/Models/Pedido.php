<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'users_id',
        'fecha',
        'usuario_nombre',
        'usuario_email',
        'total_pagar',
        'estado'
    ];

    protected $casts = [
        'total_pagar' => 'decimal:2',
    ];

    public function order_detail()
    {
        return $this->hasMany(PedidoDetalle::class, 'pedido_id');
    }
}
