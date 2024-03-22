<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function gaming(){
        return view('category.gaming');
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
