<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class VentasController extends Controller
{
    //
    public function getVenta()
    {
        $products= Product::all();

        return view('Venta.venta',['products'=>$products]);
    }

}
