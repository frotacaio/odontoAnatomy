<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OdontoController extends Controller
{
    public function index () {
        return Inertia::render('Login');
    }
}
