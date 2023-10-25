<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'tel' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'password' => Hash::make($request->password),
        ]);
        
        $filename = time() . '.' . $request->avatar->extension();
        
        $path = $request->avatar->storeAs(
            'avatars',
            $filename,
            'public'
        );
       

        $avatar = Avatar::create([
            'path' => $path,
            'users_id' => $user->id
        ]);

        event(new Registered($user));

        $user->notify(new UserRegisteredNotification);

        Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);
    }
}
