<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

class Product extends Model
{
    protected $table = 'product';

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

}
