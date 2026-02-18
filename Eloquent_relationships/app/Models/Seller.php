<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Seller extends Model
{
    protected $table = 'seller';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'product_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
