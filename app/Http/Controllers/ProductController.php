<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Http\Resources\Product\ProductResource;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }
    public function show(Product $product){
        //return $product;
        return new ProductResource($product);
    }
}
