@extends('layouts.app')

@section('content')

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Vendre un nouveau livre</h2>
    @if ($errors->any())
      @foreach ($errors->all() as $error)
          <div style="color:red;"> {{ $error }} </div>
      @endforeach
        
    @endif
    <div class="form-floating mb-3">
        <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Titre ex:Livre Ciam Tle C</label>
      </div>
    <div class="form-floating mb-3">
        <input type="number" name="prix" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Prix ex:2500</label>
      </div>
    <div class="form-floating mb-3">
        <input type="text" name="ville" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Entre ta ville</label>
      </div>
      <div class="form-floating">
        <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Description 'vous pourriez donner plus d'information sur le livre , son etat'</label>
      </div><br>
        <label for="image">Choisir une image:</label><br><br>
        <input type="file"
          id="image" name="image" 
          accept="image/png , image/jpeg">
          <br><br>
        <button class="btn btn-success" type="submit">Enregistrer</button>
</form>

@endsection 