<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
         $validated = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'description' => 'required',
        'tag' => 'required',
        'author' => 'required|min:4|max:10',
    ]);
    }

    public function AllPost(){
        echo "all post here";
    }
}
