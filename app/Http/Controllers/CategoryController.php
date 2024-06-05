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
    public function anime(Request $request)
    {
        $animeCategory = Category::findOrFail(2);

        $posts = $animeCategory->posts()->with('category', 'user');

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

        return view('category.anime', [
            "posts" => $posts
        ]);
    }
    public function technology(Request $request)
    {
        $technologyCategory = Category::findOrFail(3);

        $posts = $technologyCategory->posts()->with('category', 'user');

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

        return view('category.technology', [
            "posts" => $posts
        ]);
    }
    public function dark(Request $request)
    {
        $darkCategory = Category::findOrFail(4);

        $posts = $darkCategory->posts()->with('category', 'user');

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

        return view('category.dark', [
            "posts" => $posts
        ]);
    }
    public function random(Request $request)
    {
        $randomCategory = Category::findOrFail(5);

        $posts = $randomCategory->posts()->with('category', 'user');

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

        return view('category.random', [
            "posts" => $posts
        ]);
    }
}
