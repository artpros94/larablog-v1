<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function showOnePost($id)
    {
        $categories = Category::all()->toArray();


        return view('post', [
            'categories' => $categories,
            'post'       => Post::find($id),
        ]);
    }
}
