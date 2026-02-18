<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // $seller = Seller::all();
        // return $seller;

        // return Seller::with('product')->get();

        // return Seller::find(1)->product;

        // return Product::all()->getData();

        $data = Product::with('seller')->get();
        return $data;
    }
}
