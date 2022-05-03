<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public static function createProduct(){
        DB::table('products')->insert([
            'name' => 'Banana Caturra',
            'description' => 'Banana bonita',
            'price' => 10.54,
            'image' => 'blabla'            
        ]);
        $response = ["msg" => "produto cadastrado"];
        return json_encode($response);
    }
}
