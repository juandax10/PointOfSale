<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([
            'nombre'=>'CHARRO',
            'id_categoria'=>'1',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);

        $product->save();

        $product = new \App\Product([
            'nombre'=>'LENTES',
            'id_categoria'=>'1',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);

        $product->save();

        $product = new \App\Product([
            'nombre'=>'SUDADERA',
            'id_categoria'=>'1',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);
        $product = new \App\Product([
            'nombre'=>'MASCARA',
            'id_categoria'=>'1',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);

        $product->save();


        $product->save();


    }
}
