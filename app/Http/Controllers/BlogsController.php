<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{

    public function index(){

        return view('blog');
    }
    
    public function single(){

        return view('blog-single');
    }
}
