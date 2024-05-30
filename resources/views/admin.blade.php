@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        let table = new DataTable('#users', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/fr-FR.json',
            },
            order:[[1,'desc']],

        });
        let table2 = new DataTable('#posts', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/fr-FR.json',
            },
            order:[[1,'desc']],

        });
        let table3 = new DataTable('#recherches', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/fr-FR.json',
            },
            order:[[1,'desc']],

        });

    });
</script>
        <div class="btn-group"  style="margin:10px;">

                <a href="#users"><button class="btn btn-primary">Users</button></a>
                <a href="#posts"><button class="btn btn-secondary">Posts</button></a>
                <a href="#recherches"><button class="btn btn-light">Recherches</button></a>
        </div>

        <h2> Users </h2>
        <table class="" id="users">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>email</th>
                <th>tel</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    @forelse ($users as $user )
            <tr>
                <td scope="row">{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tel}}</td>
                <td><a name="" id="" class="btn btn-warning" href="#" role="button">Suspendre</a></td>
                <td><a name="" id="" class="btn btn-danger" href="{{route('suppressionCompte',['id'=>$user->id])}}" role="button">Supprimer</a></td>
            </tr>
    @empty
        Aucun users
    @endforelse
        </tbody>
        </table>
        <h2> Posts </h2>
        <table class="table table-striped table-inverse table-responsive" id="posts">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>prix</th>
                <th>description</th>
                <th>ville</th>
                <th>auteur</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    @forelse ($posts as $post )
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->prix}} XAF</td>
                <td style="overflow:scroll;">{{$post->description}}</td>
                <td>{{$post->ville}}</td>
                @if(!empty($post->auteur))
                <td>{{$post->users_id}}->{{$post->auteur->users_name}}|{{$post->auteur->users_tel}}</td>
                @else
                <td>{{$post->users_id}}</td>
                @endif
                {{-- <td><a name="" id="" class="btn btn-warning" href="#" role="button">Suspendre</a></td> --}}
                <td><a name="" id="" class="btn btn-danger" href="{{route('suppressionPost',['id'=>$post->id])}}" role="button">Supprimer</a></td>
            </tr>
    @empty
        Aucun users
    @endforelse
        </tbody>
        </table>
        <h2 id="recherche"> Recherches sans résultats </h2>
        <table class="" id="recherches">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>valeur</th>
                <th>date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    @forelse ($recherches as $recherche )
            <tr>
                <td scope="row">{{$recherche->id}}</td>
                <td>{{$recherche->title}}</td>
                <td>{{$recherche->created_at}}</td>
                <td><a name="" id="" class="btn btn-danger" href="" role="button">Supprimer</a></td>
            </tr>
    @empty
        Aucun
    @endforelse
        </tbody>
        </table>
@endsection
