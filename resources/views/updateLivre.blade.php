@extends('layouts.app')
@section('content')
<div class="login_wrapper jb_cover" >
        <div class="container" style="width:1000px;margin-rigth:500px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover" style="min-height:600;height:100%">
                        @if(!empty($post->image->path))
                        <div class="login_banner_wrapper" style="background:url({{ Storage::url($post->image->path) }}) !important;background-repeat:no-repeat  !important;background-position:center !important;">
                        @else
                        <div class="login_banner_wrapper" style="background:url(../images/blog-img5.jpg) !important;">
                        @endif
                        </div>
            <div class="login_form_wrapper signup_wrapper">
    {{-- <x-guest-layout> {{ Storage::url($post->image->path) }}--}}
                        <form method="POST" action="{{ route('updatePost' , ['id' => $post->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                            <h2>Modifier un livre</h2>
							<div class="form-group icon_form comments_form">

                                <x-text-input id="title" class="form-control require" type="text" name="title" value="{{$post->title}}" placeholder="Entrez le titre du manuel ex:Livre Ciam Tle" required />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="name" placeholder="Nom complet *"> --}}
                                {{-- <i class="fas fa-user"></i> --}}
                            </div>
                            {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">
                               <x-text-input id="prix" class="form-control require" type="number" placeholder="Entrez le prix du manuel ex:5000" name="prix" value="{{$post->prix}}" required/>
                                <x-input-error :messages="$errors->get('prix')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="email" placeholder="Email*"> --}}
                                {{-- <i class="fas fa-envelope"></i> --}}
                            </div>
                            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">

                                <x-text-input id="ville" class="form-control require" type="text" placeholder="Entrez votre emplacement ex: Douala , nyalla pariso" name="ville" value="{{$post->ville}}" required />
                                <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                {{-- <i class="fas fa-phone"></i> --}}
                            </div>
                            {{-- <x-input-error :messages="$errors->get('tel')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">

                                <x-text-input id="description" class="form-control require" type="text" placeholder="Entrez une description du manuel ex: Manuels quasi neuf , aucune mais 2 pages maquantes" name="description" value="{{$post->description}}" required />
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                {{-- <i class="fas fa-phone"></i> --}}
                            </div>

                            <div class="form-group icon_form comments_form">

                                <x-text-input id="image" class="form-control require" type="file" name="image" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                {{-- <i class="fas fa-file"></i> --}}
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">

                                <input type="submit" value="S'inscrire" style="visibility:hidden;background:transparent;">
                                    <a onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                     href="">Enregistrer</a>
                            </div>
                        </form>
    {{-- </x-guest-layout> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- footer --}}
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:200px;">
                            <div id="accordion" role="tablist" style="margin:100px 100px;">
                                <h1>Questions fréquemment posées...</h1>
                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading1">
                                        <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
								          		Is there any auto-renew subscription?

								        	</a>
								     	 </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion" style="">
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                   <p>This is Photoshop's version of LoremProin gravida nibh vel velit auctor Ipsum. Proin gravida nibh vel velit auctor aliquet....</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading2">
                                        <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapsethree" role="button" aria-expanded="false" aria-controls="collapsethree">
								          How many sites can I use my themes on?

								        	</a>
								     	 </h5>
                                    </div>

                                    <div id="collapsethree" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion" style="">
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>This is Photoshop's version of LoremProin gravida nibh vel velit auctor Ipsum. Proin gravida nibh vel velit auctor aliquet....</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
    <!--popular wrapper end-->
    <!--resume wrapper start-->
    <div class="pricing_table_3 recent_resume_wrapper jb_cover">
        <div class="slider_small_shape44">
            <img src="images/p2.png" class="img-responsive " alt="img">
        </div>

        <div class="counter_jbbb2 jb_cover">

            <img src="images/line3.png" class="img-responsive" alt="img">
        </div>
    </div>
    <!--resume wrapper end-->
    <!-- news app wrapper start-->


    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    <div class="popular_wrapper jb_cover">
        <div class="slider_small3_shape shapenew">
            <img src="images/shape4.png" class="img-responsive " alt="img">
        </div>

    </div>

   @section()
