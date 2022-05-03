<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public static function createProduct(){
        DB::insert('insert into products (id, name, description, price, image, created_at, updated_at) values (?,?,?,?,?,?,?)', [1, 'Dayle', 'blabla', 10.54, 'blabla', null, null]);
        $response = ["msg" => "produto cadastrado"];
        return json_encode($response);
    }
}
