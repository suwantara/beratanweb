<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }
}
