<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\sendWelcomeUserMailJob;
use App\Models\Avatar;
use App\Models\RecherchesNotFound;
use App\Models\User;
use App\Models\Post;
use App\Models\UsersDelete;
use App\Notifications\UserRegisteredNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index()
    {
        // if(Auth::user()->email == 'lucfotso0+1@gmail.com')
        // {
            $users = User::orderBy('id','asc')->get();
            $posts = Post::orderBy('id','asc')->get();
            $recherches = RecherchesNotFound::orderBy('id','asc')->get();
            // dd($users);

            return view('admin',compact('users','posts','recherches'));
        // }
        // else
        // {
        //     return abort('404');
        // }
    }
    public function update(Request $request, $id )
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'tel' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->password = $request->password;

        if(!empty($request->avatar))
        {


            $filename = time() . '.' . $request->avatar->extension();

            $path = $request->avatar->storeAs(
                'avatars',
                $filename,
                'public'
            );

            if(empty($user->avatar->path))
            {

                $avatar = Avatar::create([
                    'path' => $path,
                    'users_id' => $user->id
                ]);

                $avatar->update();
            }
            else
            {
                $avatar = Avatar::all();
                foreach($avatar as $avat)
                {
                    if($avat->users_id == $user->id)
                    {
                        $avat->path = $path;
                        $avat->update();
                    }
                }
            }
        }

        $user->update();

        return redirect('/profile');
    }
    public function suppView($id)
    {
        return view('deleteuser',compact('id'));
    }
    public function supp($id)
    {
        // $id = $request->idUser;
        $user = User::findOrFail($id);
        $userDel = UsersDelete::create([
            'name' => $user->name,
            'email' => $user->email,
            'tel' => $user->tel,
            'password' => $user->password,
        ]);
        $user->delete();
        return redirect('/');
    }

}
