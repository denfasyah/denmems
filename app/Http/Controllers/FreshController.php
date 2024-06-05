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
            'image' => 'image|file',
        ]);

        $category = Category::find($request->input('category_id'));
        
        if ($category) {
            if ($request->file('image')) {
                $image = $request->file('image')->store('post-images');
                $validatedData['image'] = $image;
            }
            
            $validatedData['category_id'] = $category->id;
            $validatedData['user_id'] = auth()->user()->id;
            Post::create($validatedData);

          

            return redirect()->route('fresh.index')->with('success', 'Postingan berhasil dibuat.');
        } else {
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
