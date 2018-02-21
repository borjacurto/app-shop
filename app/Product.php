<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // $producto->categoria
    public function categoria() {
    	return $this->belongsTo(Category::class);
    }

    // $producto->imagenes
    public function imagenes() {
    	return $this->hasMany(ProductoImagen::class, 'id_producto');
    }
}
