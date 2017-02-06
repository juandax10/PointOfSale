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
        $cat=new \App\Cate([
            'nombre'=>'SOMBRERO'
        ]);
        $cat->save();

        $cat=new \App\Cate([
            'nombre'=>'FIESTA'
        ]);
        $cat->save();

        $cat=new \App\Cate([
            'nombre'=>'ROPA'
        ]);
        $cat->save();

        $cat=new \App\Cate([
            'nombre'=>'SUPLES'
        ]);
        $cat->save();

        $product = new \App\Product([
            'nombre'=>'CHARRO',
            'categoria_id'=>'1',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);

        $product->save();

        $product = new \App\Product([
            'nombre'=>'LENTES',
            'categoria_id'=>'2',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);

        $product->save();

        $product = new \App\Product([
            'nombre'=>'SUDADERA',
            'categoria_id'=>'3',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);
        $product->save();
        $product = new \App\Product([
            'nombre'=>'MASCARA',
            'categoria_id'=>'2',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);

        $product->save();
        $product = new \App\Product([
            'nombre'=>'PROTEINA',
            'categoria_id'=>'4',
            'cantidad'=>'10',
            'precio_Compra'=>'300',
            'precio_Venta'=>'500',
        ]);




        $product->save();


    }
}
