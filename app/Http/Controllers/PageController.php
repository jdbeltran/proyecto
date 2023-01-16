<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('title','LIKE',"%{$search}%")
                            ->with('user')
                            ->latest()->paginate(); //obtener con paginacion por orden cronologico descendente (create_at)
      
        return view('home',['posts' => $posts]);
    }

    /*public function blog()
    {
    
        // $posts = Post::get(); //obtiene todos los datos de la tabla
        // $post = Post::first(); //primer registro
        // $post = Post::find(25); //obtener por Id
        // $posts = Post::get();
        
        // dd($post); //debugger objeto
     
        $posts = Post::latest()->paginate(); //obtener con paginacion por orden cronologico descendente (create_at)
        
        return view('blog',['posts' => $posts]);
    }*/

    public function post(Post $post)
    { 
        return view('post',['post' => $post]);
    }
}
