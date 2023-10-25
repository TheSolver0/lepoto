@extends('layouts.app')
   
@section('content')

 <ul class="tranding_select tabs">
        <li class="tab"><a href="#latest" class="waves-effect btn active">Latest</a></li>
        <li class="tab"><a href="#trending" class="waves-effect btn">Trending</a></li>
        <li class="tab"><a href="#featured" class="waves-effect btn">Featured</a></li>   
    </ul>
    


    <div class="container-fluid">   
        <div class="card-group" >
        @forelse ($posts as $post)
            <div class="card" >
            @if($post->image->path != null)
                <img class="card-img-top" src="{{ Storage::url($post->image->path) }}" alt="Card image cap">
            @else
                <img class="card-img-top" src="{{ asset('Images/laptop.jpg') }}" alt="Card image cap">
            @endif
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="">
                            <span  class="" style="background:#ff7141 !important;color: white;">
                            @if($post->auteur->users_name != null)
                                {{ $post->auteur->users_name }}
                            @else 
                                test 
                            @endif
                            </span>
                        </a>
                        <br>{{ $post->title }}<b> {{ $post->prix }}  <button style="margin: 0 !important;" class="btn btn-outline-success" style="left:150px;">XAF</button> </b></h4>
                    <p class="card-text"> <i>Cliquez sur le bouton description pour voir la description...</i>
                    </p>
                    <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                        <button type="button" name="description " id="description" class="btn btn-primary">Description</button>
                    </a>
                    <a href="">
                        <button type="button" name="acheter " id="acheter" class="btn btn-success">Acheter</button>
                    </a>
                </div>
            </div>
        @if($post->id %3 == 0)        
            </div>    
            <div class="card-group" >
        @endif
        @empty
         <div class="card-group" >
            <div class="card" >
                <img class="card-img-top" src="{{ asset('Images/laptop.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Livre de math ciam <b>250 XAF</b></h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Unde possimus accusantium perspiciatis sed porro quis obcaecati
                        error praesentium laboriosam alias itaque, illum ipsa? Rerum iste 
                        debitis nobis nisi suscipit corrupti.
                    </p>
                    {{-- <a href="{{ route('posts.show', ['id' => $post->id]) }}"> --}}
                        <button type="button" name="description " id="description" class="btn btn-primary btn-lg btn-block">Description</button>
                    {{-- </a> --}}
                    <a href="">
                        <button type="button" name="acheter " id="acheter" class="btn btn-success btn-lg btn-block">Acheter</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('Images/laptop.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Livre de math ciam <b>2500 XAF</b></h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Unde possimus accusantium perspiciatis sed porro quis obcaecati
                        error praesentium laboriosam alias itaque, illum ipsa? Rerum iste 
                        debitis nobis nisi suscipit corrupti.
                    </p>
                    <button type="button" name="description " id="description" class="btn btn-primary btn-lg btn-block">Description</button>
                    <button type="button" name="description " id="description" class="btn btn-success btn-lg btn-block">Acheter</button>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="{{ asset('Images/laptop.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Livre de math ciam <b>2500 XAF</b></h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Unde possimus accusantium perspiciatis sed porro quis obcaecati
                        error praesentium laboriosam alias itaque, illum ipsa? Rerum iste 
                        debitis nobis nisi suscipit corrupti.
                    </p>
                    <button type="button" name="description " id="description" class="btn btn-primary btn-lg btn-block">Description</button>
                    <button type="button" name="description " id="description" class="btn btn-success btn-lg btn-block">Acheter</button>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('Images/laptop.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Livre de math ciam <b>2500 XAF</b></h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Unde possimus accusantium perspiciatis sed porro quis obcaecati
                        error praesentium laboriosam alias itaque, illum ipsa? Rerum iste 
                        debitis nobis nisi suscipit corrupti.
                    </p>
                    <button type="button" name="description " id="description" class="btn btn-primary btn-lg btn-block">Description</button>
                    <button type="button" name="description " id="description" class="btn btn-success btn-lg btn-block">Acheter</button>
                </div>
            </div>   
        @endforelse
    </div>


@endsection