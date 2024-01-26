    <x-guest-layout>
<div style="margin:100px;">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Mot de passe oublié? Pas de problème. Juste entrez votre adresse mail et un lien de renitialisation de mot de passe vous sera envoyez.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-dark">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </x-guest-layout>

</div>
