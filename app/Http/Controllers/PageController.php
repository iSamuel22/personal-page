<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function portifolio()
    {
        return view('portifolio');
    }

    public function contato()
    {
        return view('contato');
    }
}
