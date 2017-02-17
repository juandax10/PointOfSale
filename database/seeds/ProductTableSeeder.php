<?php

use Illuminate\Database\Seeder;
use App\Cate;
use App\Product;
use App\Sabores;
use App\suplemento;
use App\Marca;
use App\Category;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // >>>>>>>>>>>>>>>>>>>>>> MARCAS >>>>>>>>>>>>>>>>>>>>>>>
        $marca = new Marca([
            'nombre' => 'USP'
        ]);
        $marca->save();
        $marca = new Marca([
            'nombre' => 'INSANE LABZ'
        ]);
        $marca->save();
        $marca = new Marca([
            'nombre' => 'UNIVERSAL'
        ]);
        $marca->save();
        $marca = new Marca([
            'nombre' => 'MUSCLEPHARM'
        ]);
        $marca->save();
        $marca = new Marca([
            'nombre' => 'GAT'
        ]);
        $marca->save();
        $marca = new Marca([
            'nombre' => 'META NUTRITION'
        ]);
        $marca->save();
        // <<<<<<<<<<<<<<<<<<<<<<< FIN MARCAS >>>>>>>>>>>>>>>>>>>
        // >>>>>>>>>>>>>>>>>>>>>> CATEGORIAS SUPLES >>>>>>>>>>>>>>>>>>>>>>>
        $suple_cate=new Category([
            'nombre'=>'AMINOACIDOS'
        ]);
        $suple_cate->save();
        $suple_cate=new Category([
            'nombre'=>'WHEY PROTEIN'
        ]);
        $suple_cate->save();
        $suple_cate=new Category([
            'nombre'=>'PRE-ENTRENAMIENTO'
        ]);
        $suple_cate->save();
        $suple_cate=new Category([
            'nombre'=>'GLUTAMINA'
        ]);
        $suple_cate->save();
        $suple_cate=new Category([
            'nombre'=>'GANADOR'
        ]);
        $suple_cate->save();
        // <<<<<<<<<<<<<<<<<<<<<<< FIN CATEGORIAS SUPLES >>>>>>>>>>>>>>>>>>>
        // >>>>>>>>>>>>>>>>>>>>>> SABORES >>>>>>>>>>>>>>>>>>>>>>>
        $sabor = new Sabores([
            'nombre' => 'SIN'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'CHOCO'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'VAINILLA'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'FRESA'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'PONCHE'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'NARANJA'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'COTTONCANDY'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'MANGO MARGARITA'
        ]);
        $sabor->save();
        $sabor = new Sabores([
            'nombre' => 'MANGO ORANGE'
        ]);
        $sabor->save();
        // <<<<<<<<<<<<<<<<<<<<<<<<<<< FIN SABORES >>>>>>>>>>>>>>>>>>>

        // >>>>>>>>>>>>>>>>>>>>>> SUPLEMENTOS >>>>>>>>>>>>>>>>>>>>>>>
        $suple = new suplemento([
            'nombre' => 'MODERN BCAA 535 gr',
            'marca_id' => '1',
            'categoria_id' => '1',
            'cantidad' => '1',
            'precio_Compra' => '421',
            'precio_Venta' => '599',
            'sabor_id' => '9',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'AMINO LIFT 30 serv',
            'marca_id' => '1',
            'categoria_id' => '1',
            'cantidad' => '3',
            'precio_Compra' => '258',
            'precio_Venta' => '399',
            'sabor_id' => '8',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'PSYCHOTIC',
            'marca_id' => '2',
            'categoria_id' => '3',
            'cantidad' => '1',
            'precio_Compra' => '408',
            'precio_Venta' => '599',
            'sabor_id' => '7',
        ]);
        $suple = new suplemento([
            'nombre' => 'PSYCHOTIC',
            'marca_id' => '2',
            'categoria_id' => '3',
            'cantidad' => '1',
            'precio_Compra' => '408',
            'precio_Venta' => '599',
            'sabor_id' => '5',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'JUICED AMINOS',
            'marca_id' => '3',
            'categoria_id' => '1',
            'cantidad' => '1',
            'precio_Compra' => '519',
            'precio_Venta' => '699',
            'sabor_id' => '6',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'COMBAT PROTEIN POWDER 4lb',
            'marca_id' => '4',
            'categoria_id' => '2',
            'cantidad' => '2',
            'precio_Compra' => '757',
            'precio_Venta' => '899',
            'sabor_id' => '2',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'COMBAT PROTEIN POWDER 4lb',
            'marca_id' => '4',
            'categoria_id' => '2',
            'cantidad' => '1',
            'precio_Compra' => '757',
            'precio_Venta' => '899',
            'sabor_id' => '3',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'COMBAT 100% WHEY 5lb',
            'marca_id' => '4',
            'categoria_id' => '2',
            'cantidad' => '1',
            'precio_Compra' => '811',
            'precio_Venta' => '949',
            'sabor_id' => '3',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'L-GLUTAMINE',
            'marca_id' => '5',
            'categoria_id' => '4',
            'cantidad' => '2',
            'precio_Compra' => '333',
            'precio_Venta' => '499',
            'sabor_id' => '1',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'META MASS 12lb',
            'marca_id' => '6',
            'categoria_id' => '5',
            'cantidad' => '2',
            'precio_Compra' => '552',
            'precio_Venta' => '799',
            'sabor_id' => '3',
        ]);
        $suple->save();
        $suple = new suplemento([
            'nombre' => 'META WHEY 5lb',
            'marca_id' => '6',
            'categoria_id' => '2',
            'cantidad' => '1',
            'precio_Compra' => '',
            'precio_Venta' => '749',
            'sabor_id' => '3',
        ]);
        $suple->save();

        // <<<<<<<<<<<<<<<<<<<<<<<<<<< FIN SUPLEMENTOS >>>>>>>>>>>>>>>>>>>

        // >>>>>>>>>>>>>>>>>>>>>> CATEGORIAS >>>>>>>>>>>>>>>>>>>>>>>
        $cat = new Cate([
            'nombre' => 'SOMBRERO'
        ]);
        $cat->save();

        $cat = new Cate([
            'nombre' => 'FIESTA'
        ]);
        $cat->save();

        $cat = new Cate([
            'nombre' => 'ROPA'
        ]);
        $cat->save();

        $cat->save();
        // <<<<<<<<<<<<<<<<<<<<<<<<<<< FIN CATEGORIA>>>>>>>>>>>>>>>>>>>

        // >>>>>>>>>>>>>>>>>>>>>> PRODUCTOS FIESTA,SOMBREROS,ETC >>>>>>>>>>>>>>>>>>>>>>>
        $product = new Product([
            'nombre' => 'CHARRO',
            'categoria_id' => '1',
            'cantidad' => '10',
            'precio_Compra' => '300',
            'precio_Venta' => '500',
        ]);

        $product->save();

        $product = new Product([
            'nombre' => 'LENTES',
            'categoria_id' => '2',
            'cantidad' => '10',
            'precio_Compra' => '300',
            'precio_Venta' => '500',
        ]);

        $product->save();

        $product = new Product([
            'nombre' => 'SUDADERA',
            'categoria_id' => '3',
            'cantidad' => '10',
            'precio_Compra' => '300',
            'precio_Venta' => '500',
        ]);
        $product->save();
        $product = new Product([
            'nombre' => 'MASCARA',
            'categoria_id' => '2',
            'cantidad' => '10',
            'precio_Compra' => '100',
            'precio_Venta' => '250',
        ]);

        $product->save();


    }
}
