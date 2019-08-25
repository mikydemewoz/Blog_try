<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(5);

        return view('posts.index')->with('posts',$posts);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        
        $this->validate($request,array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body' => 'required'
        ));

        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;

        $post->save();

        Session::flash('success','The blog was successfuly saved!');

        return redirect()->route('post_show',$post->id);
    }

    public function show($id){
        
        $post = Post::find($id);

        return view('posts.show')->with('post',$post);
    }

    public function edit($id){
        
        $post = Post::find($id);

        return view('posts.edit')->with('post',$post);
    }

    public function update(Request $request,$id){
        
        $post = Post::find($id);

        if($request->slug == $post->slug){
            $this->validate($request,array(
                'title' => 'required|max:255',
                'body' => 'required'
            ));
        }else{
            $this->validate($request,array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body' => 'required'
            ));
        }

        $post->title = $request->input('title');
        $post->slug = $request->slug;
        $post->body = $request->input('body');

        $post->save();

        Session::flash('updated','The blog was successfuly updated!');

        return redirect()->route('post_show',$post->id);

    }

    public function delete($id){
        
        $post = Post::find($id);

        $post->delete();
        return redirect()->route('post_index');
        //return 123;
    }
}
