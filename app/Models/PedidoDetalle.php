<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoDetalle extends Model
{
    use HasFactory;

    protected $table = 'pedido_detalle';

    protected $primaryKey = 'id';

    protected $fillable = [
        'pedido_id',
        'producto_id',
        'categoria_nombre',
        'producto_nombre',
        'precio_unitario',
        'cantidad',
        'precio_total'
    ];

    protected $casts = [
        'precio_unitario' => 'decimal:2',
        'precio_total' => 'decimal:2',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
