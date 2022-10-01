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
        Login::create($request->all());
        return redirect('/');
    }
}
