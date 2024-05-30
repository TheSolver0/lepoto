@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.min.css">

<div class="login_wrapper jb_cover" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover" style="min-height:600;height:100%">
                        <div class="login_banner_wrapper" style="background:url(../images/blog-img5.jpg) !important;">
                        </div>
            <div class="login_form_wrapper signup_wrapper">
    {{-- <x-guest-layout> --}}
                        <form method="POST"  action="" id="myForm" enctype="multipart/form-data">
                            {{-- <form method="POST" action="{{ route('posts.store') }}" id="myForm" enctype="multipart/form-data"> --}}
                        @csrf
                            <h2>Enregistrer un nouveau livre</h2>
							<div class="form-group icon_form comments_form">

                                <x-text-input id="title" class="form-control require" type="text" name="title" value="" placeholder="Entrez le titre du manuel ex:Livre Ciam Tle" required />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="name" placeholder="Nom complet *"> --}}
                                {{-- <i class="fas fa-user"></i> --}}
                            </div>
                            {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">
                               <x-text-input id="prix" class="form-control require" type="number" placeholder="Entrez le prix du manuel ex:5000" name="prix" value="" required/>
                                <x-input-error :messages="$errors->get('prix')" class="mt-2" />
                                {{-- <input type="text" class="form-control require" name="email" placeholder="Email*"> --}}
                                {{-- <i class="fas fa-envelope"></i> --}}
                            </div>

                            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">

                                <x-text-input id="ville" class="form-control require" type="text" placeholder="Entrez votre emplacement ex: Douala , nyalla pariso" name="ville" value="" required />
                                <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                {{-- <i class="fas fa-phone"></i> --}}
                            </div>
                            {{-- <x-input-error :messages="$errors->get('tel')" class="mt-2" /> --}}
                            <div class="form-group icon_form comments_form">

                                <x-text-input id="description" class="form-control require" type="text" placeholder="Entrez une description du manuel ex: Manuels quasi neuf , aucune mais 2 pages maquantes" name="description" value="" required />
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                {{-- <i class="fas fa-phone"></i> --}}
                            </div>

                            <div class="form-group icon_form comments_form">

                                <x-text-input id="image" class="form-control require" type="file" name="image" accept="image/png, image/jpeg" required />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                {{-- <input type="number" class="form-control require" name="tel" placeholder="Numero de téléphone*"> --}}
                                {{-- <i class="fas fa-file"></i> --}}
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">

                                <input type="submit" value="Enregistrer" class="btn btn-primary" style="">
                                    {{-- <a onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                     href="">Enregistrer</a> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

    $(document).ready(function()
    {
        // Lorsque le formulaire est soumis
        $("#myForm").submit(function(event) {
            event.preventDefault();

            // Récupérer les données du formulaire
            var formData = new FormData(this);
            console.log(formData)
            // Envoyer les données via AJAX
             $.ajax({
                type: "POST", // ou GET selon votre configuration
                url: "{{ route('posts.store') }}", // l'url de soumission
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'Cool'
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                    setTimeout(function() {
                        window.location.href = '/profile#manuel';
                    }, 1000);
                },
                error: function (data) {
                    Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong!',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
            });

        });
    });
</script>

@endsection
