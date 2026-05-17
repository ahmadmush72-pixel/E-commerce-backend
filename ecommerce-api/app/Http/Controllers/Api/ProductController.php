<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    //
  public   function index() {

    $products = Product::All();
    return response()->json([

        'status'=> true,
        'products' => $products
        
    ]);
  }
}
