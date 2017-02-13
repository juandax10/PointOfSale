<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    //
    public function getVenta()
    {/*
        $products= Product::all();
        $catego=Cate::all();
        $results2=array();
        foreach ($products as $p) {
            array_push($results2,$p->nombre);
        }*/
        return view('Venta.venta');
    }

}
