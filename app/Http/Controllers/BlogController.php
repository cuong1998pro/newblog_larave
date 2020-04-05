<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $posts = Post::with('author')->orderby('id','desc')->paginate(5);
        return view("blog.index", compact('posts'));
    }
}
