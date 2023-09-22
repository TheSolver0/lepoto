@extends('layouts.app')
   
@section('content')




    <div class="container-fluid">
        <h4>Filtrer ></h4> <hr>   
        <div class="card-group" >
        @forelse ($posts as $post)
            <div class="card" >
                <img class="card-img-top" src="{{ asset('Images/laptop.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}<b> {{ $post->prix }} </b></h4>
                    <p class="card-text">{{ $post->description }}
                    </p>
                    <button type="button" name="description " id="description" class="btn btn-primary btn-lg btn-block">Description</button>
                    <button type="button" name="description " id="description" class="btn btn-success btn-lg btn-block">Acheter</button>
                </div>
            </div>
        @if($post->id %2 == 1)        
            </div>    
            <div class="card-group" >
        @endif
        @empty
         <div class="card-group" >
            <div class="card" >
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