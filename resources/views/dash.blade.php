@extends('layouts.app')
@section('content')
<div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>Profil</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Accueil </a>&nbsp; / &nbsp; </li>
                                <li>profil</li>
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
                            <img src="images/logolepoto.png" alt="logo" style="width:200px;height:110px;">
                            {{-- <div class="header_btn search_btn facebook_wrap jb_cover">

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
                        <form method="POST" action="{{ route('update',['id' => $user->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                            <h2>Vos informations</h2>
							<div class="form-group icon_form comments_form">

                                <x-text-input id="name" class="form-control require" type="text" name="name" value="{{$user->name}}" placeholder="Nom complet *" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="name" placeholder="Nom complet *"> --}}
                                <i class="fas fa-user"></i>
                            </div>
                            {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">
                               <x-text-input id="email" class="form-control require" type="email" placeholder="Email*" name="email" value="{{Auth::user()->email}}" required/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="email" placeholder="Email*"> --}}
                                <i class="fas fa-envelope"></i>
                            </div>
                            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">

                                <x-text-input id="tel" class="form-control require" type="number" placeholder="Numero de téléphone whatsapp*" name="tel" value="{{Auth::user()->tel}}" required />
                                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                <i class="fas fa-phone"></i>
                            </div>
                            {{-- <x-input-error :messages="$errors->get('tel')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">
                                <x-text-input id="password" class="form-control require"
                                type="password"
                                name="password"
                                placeholder="Mot de passe *"
                                :value="__('Current Password')" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                {{-- <input type="password" name="password" class="form-control require" placeholder="Mot de passe *"> --}}
                                <i class="fas fa-eye"></i>
                            </div>
                            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">
                                <x-text-input id="password_confirmation" class="form-control require"
                                type="password" placeholder="Mot de passe(confirmation) *" :value="__('Current Password')"
                                name="password_confirmation" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                {{-- <input type="password" name="password" class="form-control require" placeholder="Mot de passe *"> --}}
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="form-group icon_form comments_form">

                                <x-text-input id="avatar" class="form-control require" type="file" name="avatar" />
                                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                <i class="fas fa-file"></i>
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
                                     href="">Enregistrer</a>
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
    <div class="container" id="manuel" style="margin-top:100px;">
            <div class="row" >
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>Vos livres</h3>

                        {{-- <p>Faites votre choix ....</p> --}}
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="index3_form_box jb_cover">
                            <form action="{{route('posts.search')}}" method="get">
                                <div class="select_box select_box3">

                                    <select name="tri">
                                        <option value="tri">Tri par</option>
                                        <option value="triRecent">plus recent</option>
                                        <option value="triAncien">plus ancien</option>

                                    </select>

                                </div>
                                <div class="select_box select_box3">

                                    <select name="titreconnu">
                                        <option value="titreconnu">titre connu</option>
                                        <option value="Excellence">Excellence</option>
                                        <option value="ciam">ciam</option>
                                        <option value="autre">autre</option>
                                        {{-- <option>graphic</option> --}}

                                    </select>

                                </div>
                                <div class="select_box select_box3">

                                    <select name="localisation">
                                        <option value="localisation">localisation</option>
                                        <option value="douala">Douala</option>
                                        <option value="yaounde">Yaounde</option>
                                        <option value="bandjoun">Bandjoun</option>
                                        <option value="souza">Souza</option>

                                    </select>

                                </div>
                                <div class="contect_form3 contct_form_new3">

                                    <input type="text" name="recherche" placeholder="Keyword">
                                </div>
                                <div class="index3_form_search" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <a href="#" ><i class="fas fa-search"></i></a>
                                </div>
                                </form>

                    </div>
                    </div>
                </div>
                <div class="job_filter_listing_wrapper jb_cover">
        {{-- <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block ">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Livres par sujet</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1" name="cb">
                                <label for="c1">Mathematiques<span> (**)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c2" name="cb">
                                <label for="c2">
                                    Informatique<span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c3" name="cb">
                                <label for="c3">Physique<span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c4" name="cb">
                                <label for="c4">Chimie<span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c5" name="cb">
                                <label for="c5">SVT<span> (**)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c6" name="cb">
                                <label for="c6">Histoire<span> (**)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c7" name="cb">
                                <label for="c7">Geographie<span> (**)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">Tout voir</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover active_class3">
                            <h1>Livre par lieu</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c01" name="cb">
                                <label for="c01">Douala
                                    <span> (**)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c02" name="cb">
                                <label for="c02">
                                    Yaounde
                                    <span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c03" name="cb">
                                <label for="c03">Bandjoun
                                    <span>(**)</span>
                                </label>
                            </p>
                            <div class="seeMore"><a href="#">Tout voir</a></div>
                        </div>
                    </div>
                                    </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">

                            <select>
                                <option>filtrer par</option>
                                <option>plus recent</option>
                                <option>plus ancien</option>
                                {{-- <option>top rated</option>
                            </select>

                        </div>
                        </div>--}}
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane active">
                                <div class="row">
                                @forelse ($posts as $post)
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                    @if(!empty($post->image->path))
                                                        <img src="{{ Storage::url($post->image->path) }}" alt="post_img" style="width:170px;height:200px;object-fit:contain;" />
                                                    @endif
                                                    @if(!empty($post->auteur->users_name) || !empty($post->auteur->users_tel))
                                                        <br> <span>{{$post->auteur->users_name}} </span>
                                                    @else
                                                        Auteur {{$post->users_id}}
                                                    @endif
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">{{ $post->title }}</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; XAF {{ $post->prix }} </li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; {{ $post->ville }} </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover" >
                                                        <ul>
                                                            <li>
                                                            </li>
                                                            <li>
                                                            <form method="GET" action="{{ route('posts.show')}}">
                                                                <input type="hidden" name="id" value="{{$post->id}}">
                                                                <a href=""><input type="submit" value="Description" style="background:transparent;border:1px solid transparent;cursor:pointer;"></a>
                                                            </form>
                                                            </li>
                                                            <li>
                                                        @if(!empty($post->auteur->users_tel))
                                                            <a href=""><li> Modifier Livre</a></li>
                                                        @else
                                                            <a href="https://wa.me/"><li class=""> Modifier </a></li>
                                                        @endif
                                                            </li>

                                                            {{-- @if(!empty(Auth::user()))
                                                            <a href="https://wa.me/{{$post->auteur->users_tel}}/?text=Bonjour {{$post->auteur->users_name}} Je viens vers vous depuis lepoto par rapport a  votre article du titre : {{$post->title}}"><li> Acheter</a></li>
                                                            @else
                                                            <a href="{{route('login')}}" data-toggle="modal" data-target="#myModal01">Acheter</a></li>
                                                            @endif --}}
                                                        </ul>
                                                    <a href="" class="btn btn-danger" style="margin-left:15px;margin-top:18px; border-radius:0 !important;">Supprimer</a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img" style="margin-left:0;">
                                                        <img src="images/logolepoto.jpg" alt="post_img" style="width:200px;" />
                                                        <br> <span>Luc Fotso 695984844</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">L'excellence en mathématique Tle</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; XAF 5000 </li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp;Douala,Nyalla pariso</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover" >
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">Description</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal01">Acheter</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/physique.jpg" alt="post_img" style="width:200px;" />
                                                        <br> <span>Arthur Ekoko</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">Livre Excellence en physique Tle</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; XAF 5000</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; souza</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover" >
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">description</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal02">acheter</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforelse

                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                            {{-- {{$posts->links()}} --}}
                             {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}

                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">

                </div>
            </div>
        </div>
        </div>
    {{-- footer --}}
@endsection
