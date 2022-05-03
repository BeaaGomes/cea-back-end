<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public static function createProduct(){
        $product = new Product();

        $product->name = 'Banana Caturra';
        $product->description = 'Banana bonita';
        $product->price = 10.54;
        $product->image = 'blabla';

        $product->save();
        
        $response = ["msg" => "produto cadastrado"];
        return json_encode($response);
    }
}
