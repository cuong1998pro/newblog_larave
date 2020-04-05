<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $categories = Category::with('posts')->orderby('title', 'asc')->get();
        $posts = Post::with('author')->orderby('id','desc')->paginate(5);
        return view("blog.index", compact('posts', 'categories'));
    }
    public function show($slug){
        $categories = Category::orderby('title', 'asc')->get();
        $post = Post::where('slug', $slug)->first();
        return view('blog.show_detail', compact('post', 'categories'));
    }
    public function category($slug){
        $categories = Category::with('posts')->orderBy('title', 'asc')->get();
        $posts = Post::with(['author'])->orderby('id', 'desc')->wherehas('category', function($query) use ($slug){
            $query->where('slug', 'like',$slug);
        })->paginate(5);
        return view("blog.index", compact('posts', 'categories'));
    }

}
