<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class InventarioController extends Controller
{
    //
    public function getInventario()
    {
        $products= Product::all();

        $results2=array();
        foreach ($products as $p) {
                array_push($results2,$p->nombre);
            }
        return view('Inventario.inventario',['products'=>$products,'results2'=>$results2]);
    }

    public function postProducto(Request $request)
    {
        $prod = new Product();
        $prod->nombre = strtoupper($request->input('nombre'));
        $prod->precio_Compra = $request->input('compra');
        $prod->precio_Venta = $request->input('venta');
        $prod->id_categoria = $request->input('catego');
        $prod->cantidad = $request->input('cantidad');


        $prod->save();
        return back();
    }

    public function getPedidos()
    {
        return view('Pedidos.pedidos');
    }
}
