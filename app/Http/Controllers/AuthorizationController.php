<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorizationRequest;
use App\Models\users;

class AuthorizationController extends Controller{
    public function submit(AuthorizationRequest $request) {   
        $login = $request->input('login'); 
        $auth_login = users::where('user_login',$login)->get();
        $password = $request->input('password');
        $auth_password = users::select('user_password')->where('user_login',$login)->first();
        $auth_password = $auth_password->user_password;
        if(users::where('user_login',$login)->exists()) { 
            if(password_verify($password, $auth_password)){
                return redirect()->route('homepage')->with('success', 'Авторизация прошла успешно');
            } else { 
                 return redirect()->route('homepage')->with('success', 'Неверный пароль'); 
                }
        } else { 
            return redirect()->route('homepage')->with('success', 'Пользователя не существует'); 
        }
    }   
}