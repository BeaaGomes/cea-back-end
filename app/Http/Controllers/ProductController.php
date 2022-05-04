<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
    public static function createProduct(Request $request){
        $product = $request->all();
        $user = Auth::user();
        $product["user_id"] = $user->id;
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
        $user = Auth::user();
        $product = Product::find($id);
        
        if ($user->id == $product->user_id){
            $product->delete();
            return ["msg" => "Produto deletado!"];
        } 
        
        return ["msg" => "Não é possível deletar um produto de outra pessoa :)"];       
    }

    public static function updateProductName($id, Request $request){
        $user = Auth::user();
        $product = Product::find($id);
        
        if ($user->id == $product->user_id){
            $product->name = $request->name;
            $product->save();
            return ["msg" => "Nome do produto foi atualizado!"];
        }

        return ["msg" => "Não é possível atualizar o nome de um produto de outra pessoa :)"];
       
    }

    public static function updateProductDescription($id, Request $request){
        $user = Auth::user();
        $product = Product::find($id);
        
        if ($user->id == $product->user_id){
            $product->description = $request->get("description");
            $product->save();
            return ["msg" => "Descrição do produto foi atualizada!"];
        }

        return ["msg" => "Não é possível atualizar a descrição de um produto de outra pessoa :)"];
        
    }

    public static function updateProductPrice($id, Request $request){
        $user = Auth::user();
        $product = Product::find($id);
        
        if ($user->id == $product->user_id){
            $product->price = $request->price;
            $product->save();
            return ["msg" => "Preço do produto foi atualizado!"];
        }

        return ["msg" => "Não é possível atualizar o preço de um produto de outra pessoa :)"];
    }

    public static function updateProductImage($id, Request $request){
        $user = Auth::user();
        $product = Product::find($id);
        
        if ($user->id == $product->user_id){
            $product->image = $request->image;
            $product->save();
            return ["msg" => "Imagem do produto foi atualizada!"];
        }

        return ["msg" => "Não é possível atualizar a imagem de um produto de outra pessoa :)"];
    }
}
