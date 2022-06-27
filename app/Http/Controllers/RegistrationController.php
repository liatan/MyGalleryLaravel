<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\users;

class RegistrationController extends Controller
{
   public function submit(RegistrationRequest $request) {

    $reg_data = new users();
    $reg_data->user_login=$request->input('login');
    $password=$request->input('password');
    $reg_data->user_password=password_hash($password, PASSWORD_DEFAULT);
    $reg_data->user_email=$request->input('email');
    $login=$request->input('login');
    $reg_data->user_hash=md5($login. time());

    $reg_data->save();
    
    return redirect()->route('homepage')->with('success', 'Пользователь зарегистрирован');
    }
}