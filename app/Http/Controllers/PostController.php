<?php

namespace App\Http\Controllers;

use App\Mail\MailAuxCreateur;
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
        $posts = Post::orderBy('id','desc')->paginate(4);
        // $posts = Post::orderBy('id', 'desc')->get();

        return view('index',compact('posts'));
    }
    /**
     * Summary of show
     * @param mixed $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $recherche = $_GET['id'];
        $post = Post::findOrfail($recherche);

        return view('livre',compact('post'));
    }
    public function search()
    {
        $recherche = $_GET['recherche'];
        $posts = Post::where('title','LIKE',"%$recherche%")->get();

        return view('searchpage',compact('posts'));
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
            'users_name' => Auth::user()->name,
            'users_tel' => Auth::user()->tel
        ]);

        return Redirect::route('manuel');
    }
    public function mail()
    {
        $contenu = $_POST["contenu"];
        $user = Auth::user();
        return (new MailAuxCreateur($user,$contenu))
        ->to("lucfotso0@gmail.com");
    }
}
