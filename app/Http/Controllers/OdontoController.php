<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Notifications\EmailNotification;




class OdontoController extends Controller
{
    public function index () {
        return Inertia::render('Login');
    }

    public function auth(Request $request){

/*         $request->validate([ 
            'matricula' => 'required|numeric',
            'password' => 'required' 
         ]);
 */
        $matricula = Login::get('matricula');
        $password = Login::get('password');
        $credentials = [
            'matricula' => $request->get('matricula'),
            'password' => $request->get('password')
        ];

/*          $credentials = array(
            'matricula' => $matricula,
            'password' => $password
         ); */
         //dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/Home');
        }else{
            dd('Dados incorretos, verifique e tente novamente');
        }


/* 
        if(Auth::attempt([
            'matricula'=>$request->get('matricula'),
            'senha'=>$request->get('senha')])){
            Inertia::render('Home');
        }else{
            dd('Dados incorretos, verifique e tente novamente');
        } */
    }
}
