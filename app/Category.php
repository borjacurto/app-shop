<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    // $category->productos
    public function productos() {
    	return $this->hasMany(Product::class);
    }
}
