<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ListaController extends Controller
{
    public function index(){
        return Inertia::render('Lista', [
            'lista' => Lista::all()
        ]);   
    }

    public function post(Request $request){
        $request->validate([ 
           'nome_completo' => 'required',
           'matricula' => 'required|numeric',
           'acertos' => 'required|numeric',
           'erros' => 'required|numeric',
        ]);
         Lista::create([
            'nome_completo' => $request -> nome_completo,
            'matricula' => $request -> matricula,
            'acertos' => $request -> acertos,
            'erros' => $request -> erros,   
        ]);
        session()->flash('status', 'success');
        session()->flash('message', 'Resposta cadastrada!');

        return redirect('/Lista');
    }
    
}
