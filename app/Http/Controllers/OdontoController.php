<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;


class OdontoController extends Controller
{
    public function index () {
        return Inertia::render('Login');
    }

    public function auth(Request $request){

        $credentials = [
            'matricula' => $request->get('matricula'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/Home');
        }else{
            dd('Dados incorretos, verifique e tente novamente');
        }
    }
}
