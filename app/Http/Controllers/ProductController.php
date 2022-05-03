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

        $response = ["msg" => "Produto cadastrado!"];
        return json_encode($response);
    }
}
