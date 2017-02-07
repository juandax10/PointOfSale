<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;
use App\Product;

class InventarioController extends Controller
{
    //
    public function getInventario()
    {
        $products= Product::all();
        $catego=Cate::all();
        $results2=array();
        foreach ($products as $p) {
                array_push($results2,$p->nombre);
            }
        return view('Inventario.inventario',['products'=>$products,'results2'=>$results2,'catego'=>$catego]);
    }

    public function postProducto(Request $request)
    {
        $prod = new Product();
        $prod->nombre = strtoupper($request->input('nombre'));
        $prod->precio_Compra = $request->input('compra');
        $prod->precio_Venta = $request->input('venta');
        $prod->categoria_id= $request->input('catego');
        $prod->cantidad = $request->input('cantidad');
        $prod->save();
        return back();
    }

    public function getEditProduct(Request $request)
    {
        $cat=0;
        $id=strtoupper($request->input('catego'));
        if($id=='SOMBRERO') {$cat=1;}
        if($id=='FIESTA') {$cat=2;}
        if($id=='ROPA') {$cat=3;}
        if($id=='SUPLES') {$cat=4;}
        Product::where('id', $request->input('id'))
            ->update(['nombre' => strtoupper($request->input('nombre')),'precio_Compra'=>$request->input('compra')
                ,'precio_Venta'=>$request->input('venta'),'categoria_id'=>$cat,'cantidad'=>$request->input('cantidad')]);
        return back();

    }
    public function getPedidos()
    {
        return view('Pedidos.pedidos');
    }
}
