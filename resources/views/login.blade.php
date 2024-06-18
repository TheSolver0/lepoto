@extends('layouts.app')
@section('content')
<div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>login</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover" style="min-height:600;height:100%">
                        <div class="login_banner_wrapper">
                            {{-- <img src="images/logo.png" alt="logo"> --}}
                                {{-- <div class="header_btn search_btn facebook_wrap jb_cover">

                                    <a href="#" title="pas encore fonctionnel">login with facebook <i class="fab fa-facebook-f"></i></a>

                                </div>
                                <div class="header_btn search_btn google_wrap jb_cover">

                                    <a href="#" title="pas encore fonctionnel">login with pinterest <i class="fab fa-pinterest-p"></i></a>

                                </div>
                                <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                    <h1>OR</h1>
                                </div> --}}
                        </div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login_form_wrapper">
                            <h2>Se connecter</h2>
                            <div class="form-group icon_form comments_form">
                                <x-text-input id="email" class="form-control require" type="email" placeholder="Addresse Email*" name="email" :value="old('email')" required  autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="full_name" placeholder="Email Address*"> --}}
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group icon_form comments_form">
                                <x-text-input id="password" class="form-control require"
                                type="password"
                                name="password"
                                placeholder="Mot de passe *"/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                {{-- <input type="password" name="password" class="form-control require" placeholder="Mot de passe *"> --}}
                                <i class="fas fa-eye" id="oeilomdp"></i>
                                <i class="fas fa-eye-slash" id="oeilfmdp" display="none"></i>
                            </div>

                            <div class="login_remember_box">

                                <label class="control control--checkbox">Se souvenir de moi
                                    <input type="checkbox" name="remember">
                                    <span class="control__indicator"></span>
                                </label>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forget_password">
									Mot de passe oublié
								</a>
                                @endif
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">

                                <input type="submit" value="login" style="visibility:hidden;background:transparent;">
                                <a onclick="event.preventDefault();
                                                this.closest('form').submit();" href="">Se connecter</a>
                            </div>
                            <div class="dont_have_account jb_cover">
                                <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const eye = document.querySelector("#oeilomdp");
        const eyec = document.querySelector("#oeilomdpc");
        const eyeoff = document.querySelector("#oeilfmdp");
        const eyeoffc = document.querySelector("#oeilfmdpc");
        const pass = document.querySelector("#password");
        const passc = document.querySelector("#password_confirmation");
        eye.addEventListener("click",() => {
            eye.style.display = "none";
            eyeoff.style.display = "";
            pass.type="text";
        });
        eyeoff.addEventListener("click",() => {
            eyeoff.style.display = "none";
            eye.style.display = "";
            pass.type="password";
        });
        eyec.addEventListener("click",() => {
            eyec.style.display = "none";
            eyeoffc.style.display = "";
            passc.type="text";
        });
        eyeoffc.addEventListener("click",() => {
            eyeoffc.style.display = "none";
            eyec.style.display = "";
            passc.type="password";
        });
    </script>


@endsection
