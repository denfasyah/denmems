<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $posts->where(function ($query) use ($searchTerm) {
                $query->where('caption', 'like', '%' . $searchTerm . '%')
                      ->orWhereHas('user', function ($query) use ($searchTerm) {
                          $query->where('name', 'like', '%' . $searchTerm . '%');
                      });
            });
        }

        return view('fresh.index', [
            "posts" => $posts->get()
        ]);
    }



}
