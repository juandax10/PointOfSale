<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['nombre','categoria_id','cantidad','precio_Compra','precio_Venta'];

}
