@extends('layouts.app')
@section('content')
<div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>Inscription</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Accueil </a>&nbsp; / &nbsp; </li>
                                <li>inscription</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!-- sign up wrapper start -->
    <div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover" style="min-height:600;height:100%">
                        <div class="login_banner_wrapper">
                            {{-- <img src="images/logo.png" alt="logo">
                            <div class="header_btn search_btn facebook_wrap jb_cover">

                                <a href="#" title="pas encore fonctionnel">s'inscire via facebook <i class="fab fa-facebook-f"></i></a>

                            </div>
                            {{-- <div class="header_btn search_btn google_wrap jb_cover">

                                <a href="#">login with pinterest <i class="fab fa-google-p"></i></a>

                            </div>
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>Ou</h1>
                            </div> --}}
                        </div>
                        <div class="login_form_wrapper signup_wrapper">
    {{-- <x-guest-layout> --}}
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                            <h2>s'inscrire</h2>
							   <div class="form-group icon_form comments_form">

                                <x-text-input id="name" class="form-control require" type="text" name="name" :value="old('name')" placeholder="Nom complet *" required   autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="name" placeholder="Nom complet *"> --}}
                                <i class="fas fa-user"></i>
                            </div>
                            {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">

                               <x-text-input id="email" class="form-control require" type="email" placeholder="Email*" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="email" placeholder="Email*"> --}}
                                <i class="fas fa-envelope"></i>
                            </div>
                            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">

                                <x-text-input id="tel" class="form-control require" type="number" placeholder="Numero de téléphone whatsapp*" name="tel" :value="old('tel')" required   autocomplete="tel" />
                                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                <i class="fas fa-call"></i>
                            </div>
                            {{-- <x-input-error :messages="$errors->get('tel')" class="mt-2" /> --}}
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
                            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">
                                <x-text-input id="password_confirmation" class="form-control require"
                                type="password" placeholder="Mot de passe(confirmation) *"
                                name="password_confirmation" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                {{-- <input type="password" name="password" class="form-control require" placeholder="Mot de passe *"> --}}
                                <i class="fas fa-eye" id="oeilomdpc"></i>
                                <i class="fas fa-eye-slash" id="oeilfmdpc" display="none"></i>
                            </div>

                            <div class="login_remember_box">
                                <label class="control control--checkbox">Se souvenir de moi
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">

                                <input type="submit" value="S'inscrire" style="visibility:hidden;background:transparent;">
                                    <a onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                     href="">S'inscrire</a>
                            </div>
                            <div class="dont_have_account jb_cover">
                                <p>Avez-vous un compte ? <a href="{{route('login')}}">connectez vous</a></p>
                            </div>
                        </form>
    {{-- </x-guest-layout> --}}
                        </div>
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

    {{-- footer --}}
        @endsection
<!--End of Tawk.to Script-->


</body>


<!-- Mirrored from webstrot.com/html/jbdesk/main_pages/index_III.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 23:02:06 GMT -->
</html>
