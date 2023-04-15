<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        return Inertia::render('Home',[
            'aluno' => Auth::user(),
        ]);   
    }
    public function index2(){
        return Inertia::render('Teste');
    }
}
