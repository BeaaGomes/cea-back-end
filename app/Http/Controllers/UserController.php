<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public static function createUser(Request $request){
        $user = $request->all();
        $user["password"] = Hash::make($request->password);
        User::create($user);

        return ["msg" => "Usuário cadastrado!"];
    }
    
    public static function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $token = $user->createToken('JWT');
            return ["msg" => "Login efetuado com sucesso", "token" => $token->plainTextToken];
        }
        return ["msg" => "Usuario invalido"];
    }

    public static function updateUserName(Request $request){
        $user = Auth::user();

        $user->name = $request->get("name");

        $user->save();

        return ["msg" => "Nome do usuário foi atualizado!"];
    }

    public static function updateUserEmail(Request $request){
        $user = Auth::user();

        $user->email = $request->get("email");

        $user->save();

        return ["msg" => "Email do usuário foi atualizado!"];
    }
    public static function updateUserPassword(Request $request){
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return ["msg" => "Senha do usuário foi atualizada!"];
    }

}
