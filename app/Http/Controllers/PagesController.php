<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    
    public function get_index(){

        $post = Post::orderBy('created_at','desc')->limit(5)->get();
        return view('pages.welcome')->with('posts',$post);
    }

    public function get_about(){
        return view('pages.about');
    }

    public function get_contact(){
        return view('pages.contact');
    }
}
