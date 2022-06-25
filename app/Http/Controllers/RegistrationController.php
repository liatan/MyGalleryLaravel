<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function submit(Request $request) {

       dd($request->input('login'));
    }
}
