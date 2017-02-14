<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cart;
use Buyable;

class Product extends Model implements Buyable
{
    private $options;

    protected $fillable = [
        'name', 'slug', 'description', 'stock', 'price', 'image'
    ];

    public function getBuyableIdentifier($options = NULL)
    {
        return $this->id;
    }

    public function getBuyableDescription($options = NULL)
    {
        return $this->name;
    }

    public function getBuyablePrice($options = NULL)
    {
        return $this->price;
    }
    
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
