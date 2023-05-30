<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $postsOrder = Post::orderBy('lastest', 'desc')->get();
        $highlight = Post::find(1);

        $posts = Post::all();

        return view('home', compact('postsOrder','posts', 'highlight'));
    }

    public function detail($id)
    {
        $post = Post::find($id);

        return view('detail', compact('post'));
    }
}
