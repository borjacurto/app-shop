<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model
{
    protected $table = "producto_imagenes";

    // $imagen->producto
    public function producto() {
    	return $this->belongsTo(Product::class);
    }
}
