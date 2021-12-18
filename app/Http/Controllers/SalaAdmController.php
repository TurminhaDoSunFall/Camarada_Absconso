<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaAdmController extends Controller
{
    public function index()
    {
        return view("SalaAdm");
    }
}