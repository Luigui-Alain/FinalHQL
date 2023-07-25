<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

public function index()
{
    $posts = Post::paginate(20);

    return view('posts.index', compact('posts'));
}
