<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilPessoalController extends Controller
{
    public function index()
    {
        return view("Perfilpessoal");
    }
}