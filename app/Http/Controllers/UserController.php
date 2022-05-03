<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public static function createUser(Request $request){
        $user = $request->all();
        $user["password"] = Hash::make($request->password);
        User::create($user);

        return ["msg" => "Usuário cadastrado!"];
    }
    

}
