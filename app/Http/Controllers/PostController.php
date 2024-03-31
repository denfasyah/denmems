<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('fresh.index',[
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    // public function show($id)
    // {
    //     return view('fresh.index',[
    //         "post" => Post::find($id)
    //     ]);

    // }
}
