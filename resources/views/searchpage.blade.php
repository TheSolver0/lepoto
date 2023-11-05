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
                            @if(!empty($post->auteur->users_name) || !empty($post->auteur->users_tel))
                                <span  class="" style="background:#ff7141 !important;color: white;">
                                    <a href="https://wa.me/{{$post->auteur->users_tel}}" >{{ $post->auteur->users_name }} </a>
                                </span>
                                <br /> 
                            @else 
                                Auteur
                            @endif 
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
           <h2> Aucun Résulat ! </h2>
        @endforelse
    </div>


@endsection