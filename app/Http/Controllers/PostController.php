<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        //$posts = [];
        // get here all post with who user created this post with eager loading.
        // compact the post data to welcome view.

        $posts = Post::orderBy('id','DESC')->get();

        return view('welcome', compact('posts'));
    }

    public function singlePost($id){
         $post = Post::find($id);
        return view('post', compact('post'));
    }
}
