<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
    public function product(){
        $this->belongsTo(Product::class);
    }
}
