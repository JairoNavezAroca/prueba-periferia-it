<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Tabla asociada (opcional si sigue convención)
    protected $table = 'productos';

    // Clave primaria (opcional si se llama "id")
    protected $primaryKey = 'id';

    // Campos que se pueden asignar masivamente
    protected $fillable = ['nombre', 'descripcion', 'stock', 'precio', 'imagen_url', 'categoria_id'];

    protected $casts = [
        'precio' => 'decimal:2',
    ];

    // Relación: un producto pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
