@extends('layouts.app')
@section('content')
<div class="job_single_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>Description du livre</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jb_job_overview_img">
                            @if(!empty($post->image->path))
                                <img src="{{ Storage::url($post->image->path) }}" alt="post_img" style="width:250px;"/>
                            @else
                                <img src="images/overview.png" alt="post_img" />
                            @endif
                                <h4>{{ $post->title }}</h4>
                            @if(!empty($post->auteur->users_name) || !empty($post->auteur->users_tel))
                                <ul class="job_single_lists">
                                <p><a href="tel:+237698549128">Appelez-nous pour passer commande</a></p>
                            @else
                                Auteur
                            @endif
                                </ul>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Date Posté:</li>
                                        <li>{{$post->created_at}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Localisation:</li>
                                        <li>{{$post->ville}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-money-bill-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>prix:</li>
                                        <li>{{$post->prix}} XAF</li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="header_btn search_btn news_btn overview_btn  jb_cover">

                                {{-- <a href="https//wa.me/{{$post->auteur->users_tel}}" data-toggle="modal" data-target="#myModal41">acheter maintenant</a>

                            </div> --}}
                            <div class="modal fade apply_job_popup" id="myModal41" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            {{-- @if(empty(Auth::user()))         --}}
                                                <div class="apply_job jb_cover">
                                                    <a href="{{route('register')}}">
                                                     <h1>Inscrivez-vous d'abord :</h1>
                                                    </a>
                                            {{-- @endif         --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">Description du livre</h2>
                            <p>{{$post->description}}</p>
                            <ul>
                                {{-- <li><i class="fas fa-globe-asia"></i>&nbsp;&nbsp; <a href="">whatsapp du vendeur</a></li> --}}
                                 @if(!empty($post->auteur))
                                <li><i class="fas fa-globe-asia"></i>&nbsp;&nbsp; <a href="https://wa.me/+237{{$post->auteur->users_tel}}/?text=Bonjour {{$post->auteur->users_name}} Je viens vers vous depuis lepoto par rapport a  votre article du titre : {{$post->id}}->{{$post->title}}">Passer commande par whatsapp</a></li>
                                @else
                                {{-- <li><i class="fas fa-file-download"></i>&nbsp;&nbsp; <a href="{{route('login')}}">Connectez ou Inscrivez vous d' abord</a></li>  --}}
                                @endif
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- footer Wrapper Start -->
    <div class="popular_wrapper jb_cover">
        <div class="slider_small3_shape shapenew">
            <img src="images/shape4.png" class="img-responsive " alt="img">
        </div>

    </div>

   @endsection
