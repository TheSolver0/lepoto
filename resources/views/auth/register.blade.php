<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lepoto</title>
</head>
<body>
    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Noms et prenoms')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            
              <!-- Sexe 
            <div>
                <x-input-label for="name" :value="__('Sexe')" />
                <label class="custom-control custom-radio">
                  <input type="radio" name="sexe" id="sexe" value="Sexe" class="custom-control-input">
                  <span class="custom-control-indicator">Masculin</span>
                  <input type="radio" name="sexe" id="sexe" value="Sexe" class="custom-control-input">
                  <span class="custom-control-description">Feminin</span>
                </label>
                <x-input-error :messages="$errors->get('sexe')" class="mt-2" />
            </div>-->

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Numero de télephone -->
            <div>
                <x-input-label for="tel" :value="__('Telephone')" />
                <x-text-input id="tel" class="block mt-1 w-full" type="number" name="tel" :value="old('tel')" required autofocus autocomplete="tel" />
                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Mot de passe confirmation')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- avatar -->
            <div>
                <x-input-label for="avatar" :value="__('Avatar')" />
                <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" :value="old('avatar')" required autofocus autocomplete="avatar" />
                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Avez-vous un compte?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('S\'enregistrer') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

</body>
</html>     