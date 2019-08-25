<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function get_single($slug){
        
        $post = Post::where('slug','=',$slug)->first();

        return view('blog.single')->with('post',$post);
    }

    public function get_index(){

        //$posts = Post::orderBy('created_at','desc')->paginate(10);
        $posts = Post::paginate(2);
        return view('blog.index')->with('posts',$posts);
        //return 1212;
    }
}
