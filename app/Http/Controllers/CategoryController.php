<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function gaming(Request $request)
    {
        $gamingCategory = Category::findOrFail(1);

        $posts = $gamingCategory->posts()->with('category', 'user');

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $posts->where(function ($query) use ($searchTerm) {
                $query->where('caption', 'like', '%' . $searchTerm . '%')
                      ->orWhereHas('user', function ($query) use ($searchTerm) {
                          $query->where('name', 'like', '%' . $searchTerm . '%');
                      });
            });
        }

        $posts = $posts->get();

        return view('category.gaming', [
            "posts" => $posts
        ]);
    }
    public function anime(){
        return view('category.anime');
    }
    public function technology(){
        return view('category.technology');
    }
    public function dark(){
        return view('category.dark');
    }
    public function random(){
        return view('category.random');
    }
}
