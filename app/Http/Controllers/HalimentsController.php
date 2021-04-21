<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalimentsController extends Controller
{
    public function index()
    {
        return view('horraireAliment');
    }
}
