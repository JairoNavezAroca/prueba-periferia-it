<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Listar productos
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        return response()->json($productos);
    }

    // Crear nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'precio' => 'precio|float|min:0',
            'id_categoria' => 'required|exists:categorias,id',
        ]);

        $producto = Producto::create($request->all());
        return response()->json($producto, 201);
    }

    // Mostrar un producto específico
    public function show($id)
    {
        $producto = Producto::with('categoria')->findOrFail($id);
        return response()->json($producto);
    }

    // Actualizar un producto
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'stock' => 'sometimes|required|integer|min:0',
            'precio' => 'precio|float|min:0',
            'id_categoria' => 'sometimes|required|exists:categorias,id',
        ]);

        $producto->update($request->all());
        return response()->json($producto);
    }

    // Eliminar un producto
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return response()->json(['message' => 'Producto eliminado']);
    }
}
