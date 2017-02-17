<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Category;
use App\Marca;
use App\Sabores;
use App\suplemento;
use Illuminate\Http\Request;
use App\Product;

class InventarioController extends Controller
{
    //
    public function getInventario()
    {
        $products = Product::all();
        $catego = Cate::all();
        $results2 = array();
        foreach ($products as $p) {
            array_push($results2, $p->nombre);// para el autocomplete, guarda solo los nombres en arreglo
        }

        $suples = suplemento::all();
        $results = array();
        foreach ($suples as $s) {
            array_push($results2, $s->nombre);
        }
        $catego_suples = Category::all();
        $marca = Marca::all();
        $sabor = Sabores::all();
        return view('Inventario.inventario', ['sabor' => $sabor, 'marca' => $marca, 'products' => $products, 'results2' => $results2, 'catego' => $catego, 'suples' => $suples, 'catego_suples' => $catego_suples]);
    }

    public function postProducto(Request $request)
    {
        if ($request->input('id') == 0) {
            $prod = new Product();
            $prod->nombre = strtoupper($request->input('nombre'));
            $prod->precio_Compra = $request->input('compra');
            $prod->precio_Venta = $request->input('venta');
            $prod->categoria_id = $request->input('catego');
            $prod->cantidad = $request->input('cantidad');
            $prod->save();
        } else {
            Product::where('id', $request->input('id'))
                ->update(['nombre' => strtoupper($request->input('nombre')), 'precio_Compra' => $request->input('compra')
                    , 'precio_Venta' => $request->input('venta'), 'categoria_id' => $request->input('catego'), 'cantidad' => $request->input('cantidad')]);
        }
        return back();
    }

    public function postSuple(Request $request)
    {
        if ($request->input('id_sup') == 0) {
            $su = new suplemento();
            $su->nombre = strtoupper($request->input('nombre_sup'));
            $su->marca_id = $request->input('marca');
            $su->categoria_id = $request->input('catego_sup');
            $su->cantidad = $request->input('cantidad_sup');
            $su->precio_Compra = $request->input('compra_sup');
            $su->precio_Venta = $request->input('venta_sup');
            $su->sabor_id = $request->input('sabor');
            $su->save();
        } else {
            suplemento::where('id', $request->input('id_sup'))
                ->update(['nombre' => strtoupper($request->input('nombre_sup')),'marca_id'=>$request->input('marca'),
                    'categoria_id'=>$request->input('catego_sup'), 'cantidad' => $request->input('cantidad_sup'), 'precio_Compra' => $request->input('compra_sup')
                    , 'precio_Venta' => $request->input('venta_sup'),'sabor_id'=>$request->input('sabor')]);
        }
        return back();
    }

    public function getEditProduct(Request $request)
    {
        $cat = 0;
        $id = strtoupper($request->input('catego'));
        if ($id == 'SOMBRERO') {
            $cat = 1;
        }
        if ($id == 'FIESTA') {
            $cat = 2;
        }
        if ($id == 'ROPA') {
            $cat = 3;
        }
        if ($id == 'SUPLES') {
            $cat = 4;
        }
        Product::where('id', $request->input('id'))
            ->update(['nombre' => strtoupper($request->input('nombre')), 'precio_Compra' => $request->input('compra')
                , 'precio_Venta' => $request->input('venta'), 'categoria_id' => $cat, 'cantidad' => $request->input('cantidad')]);
        return back();

    }

    public function getPedidos()
    {
        return view('Pedidos.pedidos');
    }
}
