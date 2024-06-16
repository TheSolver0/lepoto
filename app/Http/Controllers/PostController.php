<?php

namespace App\Http\Controllers;

use App\Mail\ContactMarkdownMail;
use App\Mail\SignalerPostMarkdownMail;
use App\Mail\MailAuxCreateur;
use App\Models\Auteur;
use App\Models\Image;
use App\Models\Post;
use App\Models\RecherchesNotFound;
use App\Models\User;
use App\Models\PostsDelete;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(4)->fragment('manuel');

        // $posts = Post::orderBy('id', 'desc')->get();
        // $url = url();
        // $posts->withPath($url.'#');

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
        $recherche = (!isset($_GET['recherche'])) ? "" : $_GET['recherche'];
        $tri = (!isset($_GET['tri']) || ($_GET['tri'] == 'tri par')) ? "" : $_GET['tri'] ;
        $reqtri = (!isset($_GET['tri']) || $_GET['tri'] == 'triRecent') ? 'desc' : 'asc';
        $titreconnu = (!isset($_GET['titreconnu']) || $_GET['titreconnu'] == 'titreconnu') ? "" : $_GET['titreconnu'];
        $localisation = (!isset($_GET['localisation']) || $_GET['localisation'] == 'localisation') ? "" : $_GET['localisation'];
        $posts = Post::where('title' , 'LIKE', "%$recherche%")
                        ->where('ville', 'LIKE' ,"%$localisation%")
                        ->where('title', 'LIKE' ,"%$titreconnu%" )
                        ->orderBy('id',$reqtri)
                        ->paginate(4);
        // dd($posts);
        if(isset($posts))
        {
            $recherches_not_found = RecherchesNotFound::create([
                'title' => $recherche,
            ]);
        }

        return view('searchpage',compact('posts'));
    }
    public function postAuteur(Request $request)
    {

        $posts = Post::where('users_id','LIKE',$request->id)->paginate(4);

        return view('searchpage',compact('posts'));
    }
    public function create()
    {
        return view('createpost');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'prix' => ['required'],
            'ville' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => ['required', 'sometimes','mimes:jpeg,png', 'max:4096'],
        ]);
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
            'users_id' => Auth::user()->id,
        ]);
        if(!empty($avatar) && !empty($auteur))
        {
            return response()->json([
                'success' => true,
                'message' => 'Livre Enregistré!'
            ]);
        }


    }
    public function userPosts()
    {
        $activeUserId = Auth::user()->id;
        $posts = Post::where('users_id','LIKE',$activeUserId)
                        ->orderBy('id','desc')
                        ->paginate(4);
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
    public function viewUpdate()
    {
        $recherche = $_GET['id'];
        $post = Post::findOrfail($recherche);

        return view('updateLivre',compact('post'));
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
    public function mail(Request $request)
    {
        $user = ['nom' => $request->full_name, 'email' => $request->email];
        $message = $request->message;

        Mail::to("lucfotso0@gmail.com")->send(new ContactMarkdownMail($user,$message));

        return redirect('/contact');
    }
    public function signalerPost(Request $request)
    {
        $idpost = $request->id;
        $raison = $request->raison;

        Mail::to("lucfotso0@gmail.com")->send(new SignalerPostMarkdownMail($idpost,$raison));

        return redirect('/');
    }
    public function suppView($id)
    {
        return view('deletepost',compact('id'));
    }
    public function supp(Request $request)
    {
        $id = $request->idPost;
        $post = Post::findOrFail($id);
        $postSupp = PostsDelete::create([
            'title' => $post->title,
            'prix' => $post->prix,
            'ville' => $post->ville,
            'description' => $post->description,
            'users_id' => $post->users_id
        ]);
        $post->delete();
        return redirect('/');
    }
}
