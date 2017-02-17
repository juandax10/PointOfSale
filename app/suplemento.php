<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suplemento extends Model
{
    protected $table = 'suplementos';
    protected $fillable = ['nombre','marca_id','categoria_id','cantidad','precio_Compra','precio_Venta','sabor_id'];
}
