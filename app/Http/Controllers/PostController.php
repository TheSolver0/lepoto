<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Image;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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

        $filename = time() . '.' . $request->image->extension();
        
        $path = $request->image->storeAs(
            'Images',
            $filename,
            'public'
        );
       

        $avatar = Image::create([
            'path' => $path,
            'posts_id' => $post->id
        ]);

        
        $auteur = Auteur::create([
            'posts_id' => $post->id,
            'users_name' => Auth::user()->name
        ]);

        return Redirect::route('Acceuil');
    }
}
