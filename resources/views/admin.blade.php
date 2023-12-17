<!doctype html>
<html lang="en">
  <head>
    <title>admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="btn-group" data-toggle="buttons" style="margin:10px;">
            <label class="btn btn-light active">
                <input type="radio" name="radio" id="tous" autocomplete="off" checked>Tous
            </label>
            <label class="btn btn-primary">
                <input type="radio" name="radio" id="b-users" autocomplete="off">Users
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="radio" id="b-posts" autocomplete="off">Posts
            </label>
        </div>

        <table class="table table-striped table-inverse table-responsive" id="users">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>email</th>
                <th>tel</th>
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
                <td><a name="" id="" class="btn btn-danger" href="#" role="button">Supprimer</a></td>
            </tr>
    @empty
        Aucun users
    @endforelse
        </tbody>
        </table>
        <table class="table table-striped table-inverse table-responsive" id="posts">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>prix</th>
                <th>description</th>
                <th>ville</th>
                <th>auteur</th>
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
                <td><a name="" id="" class="btn btn-danger" href="#" role="button">Supprimer</a></td>
            </tr>
    @empty
        Aucun users
    @endforelse
        </tbody>
        </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        const tab_users = document.querySelector("#users");
        const tab_posts = document.querySelector("#posts");
        const t_tous = document.querySelector("#tous");
        const t_users = document.querySelector("#b-users");
        const t_posts = document.querySelector("#b-posts");

        t_tous.addEventListener('click',() => {
            tab_users.style.display =  "";
            tab_posts.style.display =  "";
        });
        
        t_users.addEventListener('click',() => {
            tab_posts.style.display =  "none";
            tab_users.style.display =  "";
        });
        
        t_posts.addEventListener('click',() => {
            tab_users.style.display =  "none";
            tab_posts.style.display =  "";
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>