@extends('layouts.app')

@section('content')
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
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">
                                        <div class="slider_shape_smt1 bubble-2">
                                            <img src="images/bubble.png" class="img-responsive " alt="img">
                                        </div>
                                        <h2 data-animation="animated fadeInUp">Revendez en toute simplicité les manuels que vous n'utilisez plus</h2>

                                        <p data-animation="animated fadeInUp">LEPOTO, la meilleure plateforme pour élèves et etudiants.</p>
                                        @if(empty(Auth::user()))
                                            <div data-animation="animated fadeInUp" class="btn_hover slider_btn">
                                                <a href="{{route('register')}}" style="margin:10px;">Inscription gratuite</a>
                                            </div>
                                            <div data-animation="animated fadeInUp" class="btn_hover slider_btn" >
                                                <a href="{{route('login')}}" style="margin:10px;">Se connecter</a>
                                            </div>
                                        @else
                                            <div data-animation="animated fadeInUp" class="btn_hover slider_btn">
                                                <a href="{{route('profile.edit')}}" style="margin:10px;">Mon compte</a>
                                            </div>
                                            <div data-animation="animated fadeInUp" class="btn_hover slider_btn" >
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();"  style="margin:10px;"><i class="ion-power"></i>Se Déconnecter</a></li>
                                                 </form>
                                            </div>
                                        @endif
                                        {{-- <div data-animation="animated fadeInUp" class="slider_icon_list">
                                            <ul>

                                                <li><a href="#"><i class="fab fa-apple"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-amazon"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-angular"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-th-large"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-blog"></i></a>
                                                </li>

                                            </ul>
                                        </div> --}}
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_shape_sm3 bubble-3">
                                        <img src="images/bubble.png" class="img-responsive " alt="img">
                                    </div>
                                    <div class="slider_side_img jb_cover">
                                        <img src="images/slider_img.png" class="img-responsive" alt="img">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">
                                        <div class="slider_shape_smt1 bubble-4">
                                            <img src="images/bubble.png" class="img-responsive" alt="img">
                                        </div>
                                        <h2 data-animation="animated fadeInUp">Acheter en toute simplicité les manuels dont vous avez besoin</h2>

                                        <p data-animation="animated fadeInUp"> LEPOTO la meilleure plateforme pour vous...</p>
                                        <div data-animation="animated fadeInUp" class="btn_hover slider_btn">
                                            <a href="{{ route('register') }}" style="margin:10px;">Inscription gratuite</a>
                                        </div>
                                        <div data-animation="animated fadeInUp" class="btn_hover slider_btn" >
                                            <a href="{{route('login')}}" style="margin:10px;">Se connecter</a>
                                        </div>
                                        {{-- <div data-animation="animated fadeInUp" class="slider_icon_list">
                                            <ul>

                                                <li><a href="#"><i class="fab fa-apple"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-amazon"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-angular"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-th-large"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-blog"></i></a>
                                                </li>

                                            </ul>
                                        </div> --}}
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_shape_sm3 bubble-5">
                                        <img src="images/bubble.png" class="img-responsive" alt="img">
                                    </div>
                                    <div class="slider_side_img jb_cover">
                                        <img src="images/slider_img.png" class="img-responsive" alt="img">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- un autre carousel --}}
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                    </li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"><i class="flaticon-left-arrow"></i>
					</a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"><i class="flaticon-right-arrow"></i>
					</a>
                </div>
            </div>
        </div>
        <div class="slider_small_shape">
            <img src="images/shape4.png" class="img-responsive" alt="img">
        </div>
    </div>
    <!-- slider wrapper End -->
    <!--services wrapper start-->
    <div class="index3_form_wrapper jb_cover">
        <div class="slider_small3_shape">
            <img src="images/shape4.png" class="img-responsive" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="index3_form_wrapper jb_cover">
        <div class="slider_small3_shape">
            <img src="images/shape4.png" class="img-responsive" alt="img">
        </div>

    </div>
    <!--service wrapper end-->
    <!-- best jobs wrapper start-->
    <div class="best_jobs_wrapper index3_best_job_wrapper  jb_cover">
        <div class="line_shape">
            <img src="images/line.png" class="img-responsive" alt="img">
        </div>
        <div class="container" id="manuel">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>Les meilleurs manuels pour vous</h3>

                        <p>Faites votre choix ....</p>
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

                                    {{$auteur = App\Models\User::findOrFail($post->auteur->users_id)}}

                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                    @if(!empty($post->image->path))
                                                        <img src="{{ Storage::url($post->image->path) }}" alt="post_img" style="width:170px;height:200px;object-fit:contain;" />
                                                    @endif
                                                    @if(!empty($auteur->name) || !empty($auteur->tel))
                                                        <br>
                                                        <form action="{{route('posts.auteur')}}" method="get">
                                                            @csrf
                                                            @method('GET')
                                                            <input type="hidden" name = "id" value="{{$auteur->id}}">
                                                            <button type="submit" style="" class="btn btn-light"><span>{{$auteur->name}} </span></button>
                                                        </form>
                                                    @else
                                                        Auteur
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
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                            </li>
                                                            <li>
                                                            <form method="GET" action="{{ route('posts.show')}}">
                                                                <input type="hidden" name="id" value="{{$post->id}}">
                                                                <a href="" onclick="event.preventDefault();
                                                                            this.closest('form').submit();">description</a>
                                                            </form>
                                                            </li>
                                                            <li>

                                                            <form method="GET" action="">
                                                                <input type="hidden" name="id" value="{{$post->id}}">
                                                                @if(!empty($auteur->tel))
                                                                <a href="https://wa.me/+237{{$auteur->tel}}/?text=Bonjour {{$auteur->name}} Je viens vers vous depuis LEPOTO par rapport a  votre article du titre : {{$post->title}}"
                                                                    >

                                                                            acheter
                                                                </a>
                                                                @else
                                                                <a href="https://wa.me/+237690048482/?text=Bonjour  Je viens vers vous depuis LEPOTO par rapport a  votre article du titre : {{$post->title}}"
                                                                    > acheter</a>
                                                                @endif
                                                            </form>
                                                            </li>

                                                            {{-- @if(!empty(Auth::user()))
                                                            <a href="https://wa.me/{{$auteur->users_tel}}/?text=Bonjour {{$auteur->users_name}} Je viens vers vous depuis LEPOTO par rapport a  votre article du titre : {{$post->title}}"><li> Acheter</a></li>
                                                            @else
                                                            <a href="{{route('login')}}" data-toggle="modal" data-target="#myModal01">Acheter</a></li>
                                                            @endif --}}
                                                        </ul>
                                                        <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:20px;margin-top:18px; border-radius:0 !important;">
                                                            Signaler
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Signalement</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="GET" action="{{route('signalerPost')}}">
                                                                        <input type="hidden" name="id" value="{{$post->id}}">
                                                                        <input type="text" name="raison" class="raison" placeholder="Entrez la raison du signalement">
                                                                        {{-- <button type="submit" class="btn btn-danger" name="signale" style="margin-left:25px;margin-top:18px; border-radius:0 !important;">Signaler</button> --}}

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sortir</button>
                                                                    <button type="submit" class="btn btn-danger">Signaler</button>
                                                                    </form>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
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

                                @endforelse

                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                            {{-- {{$posts->links()}} --}}
                             {!! $posts->withQueryString()->links('pagination::bootstrap-4') !!}
                                {{-- <ul>
                                    <li>
                                        <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                    </li>
                                    <li><a href="#">1</a>
                                    </li>
                                    <li class="third_pagger"><a href="#">2</a>
                                    </li>
                                    <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                                    </li>

                                    <li>
                                        <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    {{-- <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Livres par sujet</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1111" name="cb">
                                <label for="c1111">Mathematiques<span> (**)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c22" name="cb">
                                <label for="c22">
                                    Informatique <span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c33" name="cb">
                                <label for="c33">Physique<span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c44" name="cb">
                                <label for="c44">Chimie <span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c55" name="cb">
                                <label for="c55">SVT<span> (**)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c66" name="cb">
                                <label for="c66">Histoire<span> (**)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c77" name="cb">
                                <label for="c77">Geographie<span> (**)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">Tout voir</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Livre par lieu</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c011" name="cb">
                                <label for="c011">Douala
                                    <span> (**)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c021" name="cb">
                                <label for="c021">
                                    Yaounde
                                    <span> (**)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c031" name="cb">
                                <label for="c031">Bandjoun
                                    <span>(**)</span>
                                </label>
                            </p>
                            <div class="seeMore"><a href="#">Tout voir</a></div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
       </div>
        <div class="slider_small3_shape">
            <img src="images/shape4.png" class="img-responsive" alt="img" style="position: relative;z-index: -5;">
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- best jobs wrapper end-->
    <!-- counter wrapper start-->
    <div class="counter_wrapper counter_3_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_mockup_design jb_cover">

                        <img src="images/mockup6.png" class="img-responsive" alt="img">
                    </div>
                    <div class="counter_jbbb jb_cover">

                        <img src="images/line2.png" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_right_wrapper counter_index3_right jb_cover">
                        <h1>Statistique</h1>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"><span class="timer">2500</span>
                                    <p class="con2">clients satisfait </p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9425</span>
                                    <p class="con2">nombre de ventes</p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9</span><span>+</span>
                                    <p class="con2">Note</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter wrapper end-->
    <!--services wrapper start-->
    <div class="services_wrapper control_wrapper jb_cover">
        <div class="slider_small_shape44">
            <img src="images/shape4.png" class="img-responsive " alt="img">
        </div>
        <div class="counter_jbbb2 jb_cover">

            <img src="images/line3.png" class="img-responsive" alt="img">
        </div>

                <div class="slider_small3_shape">
            <img src="images/shape4.png" class="img-responsive" alt="img">
        </div>

    </div>
    <!--services wrapper end-->
    <!-- download app wrapper start-->
    <div class="download_wrapper index3_download jb_cover">
        <div class="line_shape">
            <img src="images/line.png" class="img-responsive" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_mockup_design jb_cover">

                        <img src="images/mockup7.png" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_app_store jb_cover">
                        <h1>Télécharger</h1>
                        <h2>Bientôt disponible</h2>
                        <div class="app_btn playstore_2 jb_cover">
                            <a href="#" class="ss_playstore"><span><i class="flaticon-android-logo"></i></span> Play Store</a>
                            <a href="#" class="ss_appstore"><span><i class="flaticon-apple"></i></span> App Store</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download app wrapper end-->
    <!--clients wrapper start-->
    <div class="client_wrapper_top jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>Témoignage de clients satisfait
</h3>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="client_wrapper jb_cover">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                        <div class="client_wrapper_cntnt jb_cover">
                                            <div class="client_shap1 bubble-5">
                                                <img src="images/bubble.png" class="img-responsive" alt="img">
                                            </div>
                                            <div class="client_shap2 bubble-7">
                                                <img src="images/bubble.png" class="img-responsive" alt="img">
                                            </div>
                                            <img src="images/quote1.png" alt="img">

                                            <h1><a href="#">Luc FOTSO</a> <span>(vendeur)</span></h1>

                                            <p>J'ai reussi a me faire 50k xaf en une semaine en vendant mes manuels apres le bac cela m'a permis de payer mon école </p>
                                            <div class="client_shap3 bubble-6">
                                                <img src="images/bubble.png" class="img-responsive" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                        <div class="clinnt_slider_img jb_cover">
                                {{-- mettre l'image quote la --}}
                                            <img src="images/vv.png" class="img-responsive" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                        <div class="client_wrapper_cntnt jb_cover">
                                            <div class="client_shap1 bubble-8">
                                                <img src="images/bubble.png" class="img-responsive" alt="img">
                                            </div>
                                            <div class="client_shap2 bubble-9">
                                                <img src="images/bubble.png" class="img-responsive" alt="img">
                                            </div>
                                            <img src="images/quote1.png" alt="img">

                                            <h1><a href="#">Arthur Ekoko</a> <span>(Acheteur)</span></h1>

                                            <p>A l'ecole nos enseignants nous parlais de livres hors programme mais tres efficaces pour comprendre , j'ai justement pu acheter ces livres sur LEPOTO</p>
                                            <div class="client_shap3 bubble-6">
                                                <img src="images/bubble.png" class="img-responsive" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                        <div class="clinnt_slider_img jb_cover">
                                {{-- mettre l'image quote la --}}
                                            <img src="images/vv.png" class="img-responsive" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider_small3_shape shapenew">
            <img src="images/shape4.png" class="img-responsive" alt="img">
        </div>
    </div>
    <!--clients wrapper end-->
    <!--pricing table start-->
    <!--pricing table end-->
    <!--popular wrapper start-->
@endsection
