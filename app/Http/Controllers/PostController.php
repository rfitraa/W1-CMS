<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('/about',[
            "title" => "posts",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        return view('/about',[
            "title" => "Single Post",
            "posts" => Post::find($slug)
        ]);
    }
}
