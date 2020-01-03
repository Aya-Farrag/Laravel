<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //require('app/Post')
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PostController extends Controller
{
    function index ()
     {
       return view('posts.index',[
            'posts' => Post::all()
        ]);
    }

    function create (){

        return view('posts.create');

        
    }
    function store (){
        Post::create([
            'title' => request()->title,
            'content' => request()->content
        ]);
        return redirect()->route('posts.index');
                
    }
    function show ($id){

        $post = Post::find($id);
        return view('posts.show',[
            'post' => $post
        ]);

        
    }

    function edit ($id){

        $post = Post::find($id);
        return view('posts.edit',[
            'post' => $post]);

    }

    function update ($id){

        DB::table('posts')
            ->where('id', $id)
            ->update(['title' => request()->title, 'content'=> request()->content]);
            return redirect()->route('posts.index');
    }

    function destroy ($id){

        DB::table('posts')
            ->where('id', $id)
            ->delete();
            return redirect()->route('posts.index');

    }
    

}
