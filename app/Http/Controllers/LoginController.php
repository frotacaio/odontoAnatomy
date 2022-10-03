<?php

namespace App\Http\Controllers;

use App\Models\Login;
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
           'senha' => 'required' 
        ]);
        Login::create([
            'nome_completo' => $request -> nome_completo,
            'email' => $request -> email,
            'matricula' => $request -> matricula,
            'senha' => bcrypt($request -> senha),   
        ]);
        return redirect('/');
    }
}
