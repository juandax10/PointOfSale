<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    //
    public function getInventario()
    {
        return view('Inventario.inventario');
    }
    public function getPedidos()
    {
        return view('Pedidos.pedidos');
    }
}
