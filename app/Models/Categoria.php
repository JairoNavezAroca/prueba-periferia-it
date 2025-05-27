<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Tabla asociada (opcional si sigue convención de pluralización)
    protected $table = 'categorias';

    // Clave primaria (opcional si se llama "id")
    protected $primaryKey = 'id';

    // Campos que se pueden asignar masivamente
    protected $fillable = ['nombre'];

    // Relación: una categoría tiene muchos productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id');
    }
}
