<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Hi! Welcome to Laravel";
    }

    public function about()
    {
        echo "NIM   : 204172054 <br>";
        echo "Name  : Rabiatul Fitra Aulia <br>";
    }

    public function articles($id){
        echo "This is Article Pages with ID : ".$id;
    }
}
