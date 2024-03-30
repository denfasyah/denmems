<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function gaming()
    {
        // Mengambil kategori gaming dengan ID 1
        $gamingCategory = Category::findOrFail(1);

        // Mengambil semua postingan yang terkait dengan kategori gaming
        $posts = $gamingCategory->posts;

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
