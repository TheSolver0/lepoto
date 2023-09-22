<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('acceuil',compact('posts'));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('article', [
            'post' => $post
        ]);
    }
    public function create()
    {
        return view('createpost');
    }
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'prix' => $request->prix,
            'ville' => $request->ville,
            'description' => $request->description
        ]);
        return view('acceuil');
    }
}
