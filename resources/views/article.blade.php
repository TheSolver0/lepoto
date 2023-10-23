@extends('layouts.app')
   
@section('content')




    <div class="container-fluid">
        <h4>Auteur ></h4> <hr>  
        <div class="card-group" >
            <div class="card" >
          @if($post->image->path != null)
                <img class="card-img-top" src="{{ Storage::url($post->image->path) }}" alt="Card image cap">
            @else
                <img class="card-img-top" src="{{ asset('Images/laptop.jpg') }}" alt="Card image cap">
            @endif
                  <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}<b> {{ $post->prix }} </b></h4>
                    <p class="card-text">{{ $post->description }}
                    </p>
                    <button type="button" name="description " id="description" class="btn btn-success btn-lg btn-block">Acheter</button>
                </div>

                <form action="" method="POST" enctype="multipart/form-data">
                    Proposer un prix ?
                    <div class="form-floating mb-3">
                        <input type="text" name="prix" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Prix ex:2500 XAF</label>
                    </div>
                    <button type="button" name="Negocier " id="Negocier" class="btn btn-secondary btn-lg btn-block">Negocier</button>
                </form>
            </div>


@endsection
