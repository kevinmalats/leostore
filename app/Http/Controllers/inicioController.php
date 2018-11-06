<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function index()
    {
        return view('inicio.inicio');

    }

    public function __construct()
    {
       $this->middleware('auth');

    }
}
