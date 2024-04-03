<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index', [
            'posts' => Post::where('user_id', auth()->user()->id)
                         ->latest() // Mengurutkan postingan dari yang terbaru
                         ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('profile.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'caption' => 'required|max:255',
            'category_id' => 'required|integer',
        ]);

        $post->update($validatedData);

        return redirect('/profile')->with('success', 'Postingan berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/profile')->with('success', 'Postingan berhasil dihapus');
        
    }
}
