<?php

namespace App\Http\Controllers;

use App\Models\FoodPost;
use Illuminate\Http\Request;

class FoodPostController extends Controller
{
     public function index()
     {
        $foodposts = FoodPost::with('user')
            ->latest()
            ->take(3)  // Limit to 3 most recent posts
            ->get();

        return view('home', ['foodposts' => $foodposts]);
    }
}
