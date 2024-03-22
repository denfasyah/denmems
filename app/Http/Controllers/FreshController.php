<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreshController extends Controller
{
    public function index(){
        return view('fresh.index');
    }
}
