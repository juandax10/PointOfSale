<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products';
    protected $fillable = ['nombre','id_categoria','cantidad','precio_Compra','precio_Venta'];
}
