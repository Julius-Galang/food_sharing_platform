<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodPostController extends Controller
{
     public function index()
    {
        return view('index');
    }
}
