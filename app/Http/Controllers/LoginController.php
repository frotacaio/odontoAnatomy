<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function index(){
        return Inertia::render('Registro');
    }
    
    public function post(Request $request){
        $request->validate([ 
           'nome_completo' => 'required',
           'email' => 'required|email',
           'matricula' => 'required|numeric',
           'password' => 'required' 
        ]);
        User::create([
            'nome_completo' => $request -> nome_completo,
            'email' => $request -> email,
            'matricula' => $request -> matricula,
            'password' => bcrypt($request -> password),   
        ]);

        return redirect('/');
    }
}
