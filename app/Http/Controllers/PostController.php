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
        $recherche = (empty($_GET['recherche'])) ? "" : $_GET['recherche'];
        $tri = ($_GET['tri'] == 'tri par') ? "" : $_GET['tri'] ;
        $reqtri = ($_GET['tri'] == 'triRecent') ? 'desc' : 'asc';
        $titreconnu = ($_GET['titreconnu'] == 'titreconnu') ? "" : $_GET['titreconnu'];
        $localisation = ($_GET['localisation'] == 'localisation') ? "" : $_GET['localisation'];
        $posts = Post::where('title' , 'LIKE', "%$recherche%")
                        ->where('ville', 'LIKE' ,"%$localisation%")
                        ->where('title', 'LIKE' ,"%$titreconnu%" )
                        ->orderBy('id',$reqtri)
                        ->paginate(4);

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
            'description' => $request->description,
            'users_id' => Auth::user()->id
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
    public function userPosts()
    {
        $activeUserId = Auth::user()->id;
        $posts = Post::where('users_id','LIKE',$activeUserId)->paginate(4);
        // dd($posts);
        // $i = 0;
        // foreach($auteur as $item)
        // {
            // $id = $auteur->posts_id;
            // $posts = Post::findOrFail($id)->get();
        //     $i++;
        // }
        $user = Auth::user();

        return view('profile.edit',compact('posts','user'));
    }
    public function update(Request $request, $id )
    {
        
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'tel' => ['required'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->prix = $request->prix;
        $post->ville = $request->ville;
        $post->description = $request->description;
        // $post->post_id = $post->id;

        if(!empty($request->image))
        {


            $filename = time() . '.' . $request->image->extension();
            
            $path = $request->image->storeAs(
                'Images',
                $filename,
                'public'
            );
        
            if(empty($post->image->path))
            { 

                $image = Image::create([
                    'path' => $path,
                    'posts_id' => $post->id
                ]);

                $image->update();
            }
            else
            {
                $image = Image::all();
                foreach($image as $avat)
                {
                    if($avat->posts_id == $post->id)
                    {
                        $avat->path = $path;
                        $avat->update();
                    }
                }
            }
        }

        $post->update();

        return redirect('/profile');
    
    }
    public function viewUpdate($id)
    {
        $post = Post::findOrFail($id);

        return view('updateLivre',compact('post'));
    }
    public function mail()
    {
        $contenu = $_POST["contenu"];
        $user = Auth::user();
        return (new MailAuxCreateur($user,$contenu))
        ->to("lucfotso0@gmail.com");
    }
}
