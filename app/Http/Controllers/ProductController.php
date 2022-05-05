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
        $product["image"] = $request->file("image")->store("public/images");

        Product::create($product);

        return ["msg" => "Produto cadastrado!"];
    }

    public static function getAllProducts(){
        return Product::all();
    }

    public static function getProduct($id){
        return Product::find($id);
    }

    public static function getProducts(){
        $user = Auth::user();
        return Product::where("user_id", $user->id)->get();
    }

    public static function deleteProduct($id){
        $product = Product::find($id);
        
        if ($product->tryToDelete()){
            return ["msg" => "Produto deletado!"];
        } 
        
        return ["msg" => "Não é possível deletar um produto de outra pessoa :)"];       
    }

    public static function updateProductName($id, Request $request){
        $product = Product::find($id);

        if($product->tryToUpdate("name", $request->new_value)){
            return ["msg" => "Nome do produto foi atualizado!"];
        }

        return ["msg" => "Não é possível atualizar o nome de um produto de outra pessoa :)"];
    }

    public static function updateProductDescription($id, Request $request){
        $product = Product::find($id);
        
        if($product->tryToUpdate("description", $request->new_value)){
            return ["msg" => "Descrição do produto foi atualizado!"];
        }

        return ["msg" => "Não é possível atualizar a descrição de um produto de outra pessoa :)"];
    }

    public static function updateProductPrice($id, Request $request){
        $product = Product::find($id);
        
        if($product->tryToUpdate("price", $request->new_value)){
            return ["msg" => "Preço do produto foi atualizado!"];
        }

        return ["msg" => "Não é possível atualizar o preço de um produto de outra pessoa :)"];
    }

    public static function updateProductImage($id, Request $request){
        $product = Product::find($id);

        $product->deleteImage();

        $new_value = $request->file("new_value")->store("public/images");
        
        if($product->tryToUpdate("image", $new_value)){
            return ["msg" => "Imagem do produto foi atualizado!"];
        }

        return ["msg" => "Não é possível atualizar o imagem de um produto de outra pessoa :)"];
    }


}
