<x-guest-layout>
    
    {{-- <div class="mt-4 flex items-center justify-between"> --}}
        <div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover" style="min-height:600;height:100%">
                        <div class="login_banner_wrapper"></div>
                        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="login_form_wrapper">
                                    
            {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400"> --}}
            <p>
                    {{-- {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }} --}}
                Merci pour votre inscription dans notre application, pour pouvoir profiter pleinement de l'application
                    nous devons effectuer une verification de votre adresse mail . Pour cela nous vous avons envoyé un mail de vérification
                    si vous ne l'avez reçu nous vous invitons a cliquer sur le bouton renvoyer un mail de verification.
            </p>
            <br>
            <br>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('Un nouveau lien de verification a été envoyé a votre adresse mail') }}
                    </div>
                @endif

            <div>
                <button class="btn btn-dark">
                    {{ __('Renvoyer un mail de vérification') }}
                </button>
            </div>

        </form>
            <br>
            <br>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-danger">
                {{ __('Deconnexion') }}
            </button>
        </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</x-guest-layout>
