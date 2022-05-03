<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public static function greet(){
        $response = ["msg" => "Hello world"];
        return json_encode($response);
    }
}
