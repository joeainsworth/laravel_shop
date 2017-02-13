<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'stock', 'price', 'image'
    ];

    public function hasLowStock()
    {
    	if ($this->outOfStock()) {
    		return false;
    	}

    	return (bool) ($this->stock <= 5);
    }

    public function outOfStock() 
    {
    	return $this->stock === 0;
    }

    public function inStock()
    {
    	return $this->stock >= 1;
    }

    public function hasStock()
    {
    	return $this->stock >= quantity;
    }
}
