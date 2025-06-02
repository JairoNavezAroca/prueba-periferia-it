<?php

namespace App\Http\Controllers;

use App\Common\Constantes;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Pedido;
use App\Models\PedidoDetalle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index()
    {
        $productos = Pedido::with('order_detail.producto')->get();
        return response()->json($productos);
    }

    public function store(Request $request)
    {
        $data_pedido = $request->all();
        $data_pedido['fecha'] = Carbon::now()->toDateTimeString();
        $data_pedido['estado'] = Constantes::PEDIDO_ESTADO_EN_PROCESO;
        DB::beginTransaction();
        $pedido = Pedido::create($data_pedido);
        foreach ($data_pedido['order_detail'] as $item) {
            $item['pedido_id'] = $pedido->id;
            PedidoDetalle::create($item);
        }
        DB::commit();
        return response()->json($pedido, 201);
    }

    public function show($id)
    {
        $pedido = Pedido::with('order_detail.producto')->findOrFail($id);

        return response()->json($pedido);
    }

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
