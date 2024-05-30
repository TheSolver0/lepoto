@extends('layouts.app')
@section('content')
<div class="best_jobs_wrapper index3_best_job_wrapper  jb_cover" style="margin-top:200px !important;">
        <div class="line_shape">
            <img src="images/line.png" class="img-responsive" alt="img">
        </div>
        <div class="container" id="manuel">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>Les Résultats de votre recherche :</h3>

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
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                    @if(!empty($post->image->path))
                                                        <img src="{{ Storage::url($post->image->path) }}" alt="post_img" style="width:170px;height:200px;object-fit:contain;" />
                                                    @endif
                                                    @if(!empty($post->auteur->users_name) || !empty($post->auteur->users_tel))
                                                        <br>
                                                        <form action="{{route('posts.auteur')}}" method="get">
                                                            @csrf
                                                            @method('GET')
                                                            <input type="hidden" name = "tel" value="{{$post->auteur->users_tel}}">
                                                            <button type="submit" style="" class="btn btn-light"><span>{{$post->auteur->users_name}} </span></button>
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
                                                                @if(!empty($post->auteur->users_tel))
                                                                <a href="https://wa.me/{{$post->auteur->users_tel}}/?text=Bonjour {{$post->auteur->users_name}} Je viens vers vous depuis LEPOTO par rapport a  votre article du titre : {{$post->title}}"
                                                                    onclick="event.preventDefault();
                                                                            this.closest('form').submit();">acheter</a>
                                                                @else
                                                                <a href="https://wa.me/+237{{$post->auteur->users_tel}}/?text=Bonjour  Je viens vers vous depuis LEPOTO par rapport a  votre article du titre : {{$post->title}}"
                                                                    onclick="event.preventDefault();
                                                                            this.closest('form').submit();"> acheter</a>
                                                                @endif
                                                            </form>
                                                            </li>

                                                            {{-- @if(!empty(Auth::user()))
                                                            <a href="https://wa.me/{{$post->auteur->users_tel}}/?text=Bonjour {{$post->auteur->users_name}} Je viens vers vous depuis LEPOTO par rapport a  votre article du titre : {{$post->title}}"><li> Acheter</a></li>
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
                                    <h2 style="color:red;">Aucun résultat ! </h2>
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
            <img src="images/shape4.png" class="img-responsive" alt="img">
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
        <!--resume wrapper end-->
    <!-- news app wrapper start-->

    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    <div class="slider_small3_shape shapenew">
        <img src="images/shape4.png" class="img-responsive" alt="img">
    </div>
</div>
<!--clients wrapper end-->
<!--pricing table start-->
<!--pricing table end-->
<!--popular wrapper start-->
<div class="popular_wrapper jb_cover">
    <div class="slider_small3_shape shapenew">
        <img src="images/shape4.png" class="img-responsive " alt="img">
    </div>

</div>

@endsection
