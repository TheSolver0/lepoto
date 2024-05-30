@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.min.css">

    <div class="main_slider_wrapper slider-area jb_cover">
        <div class="mains_slider_shaper">
            <img src="images/slider_bg.png" class="img-responsive" alt="img">
        </div>
        <div class="slider_small2_shape">
            <img src="images/shape4.png" class="img-responsive " alt="img">
        </div>
        <div class="slider_shape_smt bubble-1">
            <img src="images/bubble.png" class="img-responsive " alt="img">
        </div>
        <!-- mainmenu end -->


        <!-- navi wrapper End -->
        <!-- top header wrapper start -->
        <div class="page_title_section">

            <div class="page_header">
                <div class="container">
                    <div class="row">
                        <!-- section_heading start -->
                        <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                            <div class="sub_title_section">
                                <ul class="sub_title">
                                    <li> <a href="#"> Accueil </a>&nbsp; / &nbsp; </li>
                                    <li>Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- top header wrapper end -->
        <!-- company details wrapper start-->
        <div class="company_details_wrapper jb_cover">
        </div>
        <div class="webstrot_tech_detail jb_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="job_listing_left_fullwidth jb_cover">
                            <div class="row">
                                <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                    <div class="jp_job_post_side_img">
                                        @if (!empty($user->avatar->path))
                                            <img src="{{ Storage::url($user->avatar->path) }}" alt="img"
                                                style="width:50px;height:50px;border-radius:50%;"></span>
                                        @else
                                            <img src="images/profile-11.jpg" alt="img"
                                                style="width:50px;height:50px;border-radius:50%;"></span>
                                        @endif
                                    </div>
                                    <div class="jp_job_post_right_cont web_text">
                                    </div>
                                    <a href="#informations">
                                        <h4>{{ $user->name }}</h4>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                                    <div class="jp_job_post_right_btn_wrapper web_single_btn">
                                        <ul>
                                            <li><a href="#manuel">Voir mes Livres</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="jb_listing_single_overview jb_cover">
                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>
                            <form id="informations" action="" enctype="multipart/form-data" style="margin:50px;">
                                {{-- <form method="POST" id="informations" action="{{ route('update',['id' => $user->id]) }}" enctype="multipart/form-data" style="margin:50px;"> --}}
                                @csrf
                                @method('PATCH')

                                <h2>Mes informations</h2>
                                <div class="form-group icon_form comments_form">

                                    <x-text-input id="name" class="form-control require" type="text" name="name"
                                        value="{{ $user->name }}" placeholder="Nom complet *" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    {{-- <input type="text" class="form-control require" name="name" placeholder="Nom complet *"> --}}
                                    <i class="fas fa-user"></i>
                                </div>
                                {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                                <div class="form-group icon_form comments_form">
                                    <x-text-input id="email" class="form-control require" type="email"
                                        placeholder="Email*" name="email" value="{{ Auth::user()->email }}" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    {{-- <input type="text" class="form-control require" name="email" placeholder="Email*"> --}}
                                    <i class="fas fa-envelope"></i>
                                </div>
                                {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                                <div class="form-group icon_form comments_form">

                                    <x-text-input id="tel" class="form-control require" type="number"
                                        placeholder="Numero de téléphone whatsapp*" name="tel"
                                        value="{{ Auth::user()->tel }}" required />
                                    <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                    {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                    <i class="fas fa-phone"></i>
                                </div>
                                {{-- <x-input-error :messages="$errors->get('tel')" class="mt-2" /> --}}
                                <div class="form-group icon_form comments_form">
                                    <x-text-input id="password" class="form-control require" type="password"
                                        name="password" placeholder="Mot de passe *" :value="__('Current Password')" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    {{-- <input type="password" name="password" class="form-control require" placeholder="Mot de passe *"> --}}
                                    <i class="fas fa-eye" id="oeilomdp"></i>
                                    <i class="fas fa-eye-slash" id="oeilfmdp" display="none"></i>
                                </div>
                                {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                                <div class="form-group icon_form comments_form">
                                    <x-text-input id="password_confirmation" class="form-control require" type="password"
                                        placeholder="Mot de passe(confirmation) *" :value="__('Current Password')"
                                        name="password_confirmation" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    {{-- <input type="password" name="password" class="form-control require" placeholder="Mot de passe *"> --}}
                                    <i class="fas fa-eye" id="oeilomdpc"></i>
                                    <i class="fas fa-eye-slash" id="oeilfmdpc" display="none"></i>
                                </div>
                                <div class="form-group icon_form comments_form">

                                    <x-text-input id="avatar" class="form-control require" type="file"
                                        name="avatar" />
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

                                    <input type="submit" value="Mettre à jour" class="btn btn-success" style="">
                                    {{-- <a onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                     href="">Enregistrer</a> --}}
                                </div>
                            </form>
                            <div class="dont_have_account jb_cover">
                                {{-- <p>Avez-vous un compte ? <a href="{{route('login')}}">connectez vous</a></p> --}}
                                {{-- <a name="" id="" class="btn btn-danger" href="{{route('suppressionCompte',['id'=>$user->id])}}" role="button">Supprimer le compte</a></td> --}}
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                    style="margin-left:20px;margin-top:18px; border-radius:0 !important;">
                                    Supprimer le compte
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Suppression</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post"
                                                    action="{{ route('SupprimCompte', ['id' => Auth::user()->id]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    Etes-vous vraiment certain de vouloir supprimer votre compte ?
                                                    {{-- <input type="hidden" name="idUser" value="{{}}"> --}}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Sortir</button>
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12" style="display: none;">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>dashboard</h1>
                        </div>
                        <div class="job_overview_header jb_cover">

                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Mes informations:</li>
                                        {{-- <li>Design & Creative</li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Mes livres:</li>
                                        {{-- <li>Los Angeles Califonia PO</li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>FAQ :</li>
                                        {{-- <li>0145636941:</li> --}}
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="container" id="manuel" style="margin-top:250px;">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                <div class="jb_heading_wraper">

                    <h3>Mes livres <a href="{{ route('vendre') }}" class="btn btn-success">Enregistrer un nouveau livre
                            ?</a></h3>


                    {{-- <p>Faites votre choix ....</p> --}}
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="index3_form_box jb_cover">
                                <form action="{{ route('posts.search') }}" method="get">
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
                                    <div class="index3_form_search"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <a href="#"><i class="fas fa-search"></i></a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="job_filter_listing_wrapper jb_cover" id="{{ route('manuel') }}s">
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
                        </div> --}}

                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane active">
                                <div class="row">
                                    @forelse ($posts as $post)
                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="jp_job_post_side_img">
                                                            @if (!empty($post->image->path))
                                                                <img src="{{ Storage::url($post->image->path) }}"
                                                                    alt="post_img"
                                                                    style="width:170px;height:200px;object-fit:contain;" />
                                                            @endif
                                                            @if (!empty($post->auteur->users_name) || !empty($post->auteur->users_tel))
                                                                <br>
                                                                <form action="{{ route('posts.auteur') }}"
                                                                    method="get">
                                                                    @csrf
                                                                    @method('GET')
                                                                    <input type="hidden" name = "tel"
                                                                        value="{{ $post->auteur->users_tel }}">
                                                                    <button type="submit" style=""
                                                                        class="btn btn-light"><span>{{ $post->auteur->users_name }}
                                                                        </span></button>
                                                                </form>
                                                            @else
                                                                Auteur
                                                            @endif
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4><a href="#">{{ $post->title }}</a></h4>

                                                            <ul>
                                                                <li><i class="flaticon-cash"></i>&nbsp; XAF
                                                                    {{ $post->prix }} </li>
                                                                <li><i class="flaticon-location-pointer"></i>&nbsp;
                                                                    {{ $post->ville }} </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                            <ul>
                                                                <li>
                                                                </li>
                                                                <li>
                                                                    <form method="GET"
                                                                        action="{{ route('posts.show') }}">
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $post->id }}">
                                                                        <a href=""
                                                                            onclick="event.preventDefault();
                                                                            this.closest('form').submit();">description</a>
                                                                    </form>
                                                                </li>
                                                                <li>

                                                                    <form method="GET"
                                                                        action="{{ route('updatelivre') }}">
                                                                        @csrf
                                                                        {{-- @method('PATCH') --}}
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $post->id }}">

                                                                        <a href=""
                                                                            onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                                            Modifier</a>

                                                                    </form>
                                                                </li>

                                                                {{-- @if (!empty(Auth::user()))
                                                            <a href="https://wa.me/{{$post->auteur->users_tel}}/?text=Bonjour {{$post->auteur->users_name}} Je viens vers vous depuis LEPOTO par rapport a  votre article du titre : {{$post->title}}"><li> Acheter</a></li>
                                                            @else
                                                            <a href="{{route('login')}}" data-toggle="modal" data-target="#myModal01">Acheter</a></li>
                                                            @endif --}}
                                                            </ul>
                                                            <!-- Button trigger modal -->
                                                            <a type="button" class="btn btn-danger"
                                                                href="{{ route('suppressionPost', ['id' => $post->id]) }}"
                                                                style="margin-left:20px;margin-top:18px; border-radius:0 !important;">
                                                                Supprimer
                                                            </a>

                                                            <!-- Modal -->

                                                            {{-- <form method="GET" action="{{route('signalerPost')}}"
                                                            onmouseover="event.preventDefault();
                                                                    this.querySelector('.raison').style.display='';"
                                                            onmouseout="event.preventDefault();
                                                                    this.querySelector('.raison').style.display='none';">
                                                            <input type="hidden" name="id" value="{{$post->id}}">

                                                            <input type="text" name="raison" class="raison" placeholder="Entrez la raison du signalement" style="display:none;">
                                                            <button type="submit" class="btn btn-danger" name="signale" style="margin-left:25px;margin-top:18px; border-radius:0 !important;">Signaler</button>
                                                        </form> --}}
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    @empty
                                        vous n'avez aucun livre enregistré.
                                    @endforelse

                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                                {{-- {{$posts->links()}} --}}
                                {!! $posts->withQueryString()->links('pagination::bootstrap-4') !!}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">

                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
    <!-- company details wrapper end-->
    <!-- news app wrapper start-->
    <script>
        const eye = document.querySelector("#oeilomdp");
        const eyec = document.querySelector("#oeilomdpc");
        const eyeoff = document.querySelector("#oeilfmdp");
        const eyeoffc = document.querySelector("#oeilfmdpc");
        const pass = document.querySelector("#password");
        const passc = document.querySelector("#password_confirmation");
        eye.addEventListener("click", () => {
            eye.style.display = "none";
            eyeoff.style.display = "";
            pass.type = "text";
        });
        eyeoff.addEventListener("click", () => {
            eyeoff.style.display = "none";
            eye.style.display = "";
            pass.type = "password";
        });
        eyec.addEventListener("click", () => {
            eyec.style.display = "none";
            eyeoffc.style.display = "";
            passc.type = "text";
        });
        eyeoffc.addEventListener("click", () => {
            eyeoffc.style.display = "none";
            eyec.style.display = "";
            passc.type = "password";
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        $(document).ready(function() {
            // Lorsque le formulaire est soumis
            $("#informations").submit(function(event) {
                event.preventDefault();

                // Récupérer les données du formulaire
                var formData = new FormData(this);
                var token = $('input[name=_token]').val();

                console.log(formData)
                // Envoyer les données via AJAX
                $.ajax({
                    type: "POST", // ou GET selon votre configuration
                    url: "{{ route('update', ['id' => $user->id]) }}", // l'url de soumission
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': token // Inclure le token CSRF dans les en-têtes de la requête
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'Cool'
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                        setTimeout(function() {
                            window.location.href = '/profile';
                        }, 1000);
                    },
                    error: function(data) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong!',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                });

            });
        });
    </script>
@endsection
