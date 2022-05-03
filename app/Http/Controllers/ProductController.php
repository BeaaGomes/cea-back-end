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

    public static function deleteProduct($id){
        $product = Product::find($id)->delete();
        return ["msg" => "Produto deletado!"];
    }

    public static function updateProductName($id, Request $request){
        $product = Product::find($id);

        $product->name = $request->get("name");

        $product->save();

        return ["msg" => "Nome do produto foi atualizado!"];
    }

    public static function updateProductDescription($id, Request $request){
        $product = Product::find($id);

        $product->description = $request->get("description");

        $product->save();

        return ["msg" => "Descrição do produto foi atualizada!"];
    }

    public static function updateProductPrice($id, Request $request){
        $product = Product::find($id);

        $product->price = $request->get("price");

        $product->save();

        return ["msg" => "Preço do produto foi atualizado!"];
    }
}
