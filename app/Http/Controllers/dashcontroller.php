<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashcontroller extends Controller
{
    public function index()
    {
        return view('res.dashboard');

    }

    public function __construct()
    {
        $this->middleware('auth');

    }
}
