<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarSalaController extends Controller
{
    public function index()
    {
        return view("criarsala");
    }
}