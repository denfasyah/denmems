<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FreshController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fresh.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'caption' => 'required|max:255',
            'category_id' => 'required|integer',
        ]);

    // Pastikan kategori dengan ID yang diberikan ada dalam database
        $category = Category::find($request->input('category_id'));

        if ($category) {
        // Jika kategori ditemukan, simpan postingan
            $validatedData['category_id'] = $category->id;
            $validatedData['user_id'] = auth()->user()->id;
            Post::create($validatedData);

        // Redirect atau lakukan operasi lain sesuai kebutuhan
            return redirect()->route('fresh.index')->with('success', 'Post berhasil dibuat.');
        } else {
        // Handle jika kategori tidak ditemukan
            return redirect()->back()->withInput()->with('error', 'Kategori tidak valid.');
        }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
