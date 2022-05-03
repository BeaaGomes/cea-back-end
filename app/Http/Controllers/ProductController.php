<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public static function createProduct(Request $request){
        $product = $request->all();

        Product::create($product);

        return ["msg" => "Produto cadastrado!"];
    }

    public static function getProducts(){
        return Product::all();
    }

    public static function getProduct($id){
        $product = Product::find($id);
        return $product; 
    }

}
