<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all()->toArray();


        return view('home', [
            'categories' => $categories,
            'posts'      => Post::all(),
        ]);
    }
}
