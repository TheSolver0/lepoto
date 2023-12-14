<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\sendWelcomeUserMailJob;
use App\Models\Avatar;
use App\Models\User;
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
}
