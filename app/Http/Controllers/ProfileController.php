<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index', [
            'posts' => Post::where('user_id', auth()->user()->id)
                         ->latest() // Mengurutkan postingan dari yang terbaru
                         ->get()
        ]);
    }
}
