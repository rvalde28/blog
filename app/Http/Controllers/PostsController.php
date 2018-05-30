<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

class PostsController extends Controller
{
    public function index(){
        $posts = Posts::latest()->get();
        return view('posts.index',compact('posts'));
    }

    public function create(){

      return view('posts.create');
    }

    public function store(){
         $post = new Posts;
         $post->title = "from vue 3";
         $post->body = "successful from vue 3";

         $post->save();
//        $this->validate(request(),[
//          'title'=> 'required',
//          'body' => 'required'
//        ]);


        //Posts::create(request(['title','body']));
    }

    public function show(Posts $post){
      return view('posts.show',compact('post'));
    }
}
