<!DOCTYPE html>
<html lang="pt-BR" class="bg-gray-900 text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robz - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white min-h-screen">

<x-guest-layout>
    <div class="flex items-center justify-center mb-6 bg-gray-800 p-4 rounded-md shadow-lg">
        <img src="{{ asset('images/roblox.svg') }}" alt="Logo" class="h-12 w-auto mr-2">
        <span class="text-2xl font-bold text-white">Robz</span>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-white" />
            <x-text-input id="email" class="block mt-1 w-full bg-gray-700 text-white border-gray-600 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" class="text-white" />
            <x-text-input id="password" class="block mt-1 w-full bg-gray-700 text-white border-gray-600 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <div class="block mt-4 text-white">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-400 hover:text-gray-200 focus:outline-none" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                
                <a class="underline text-sm text-gray-400 hover:text-gray-200 focus:outline-none" href="{{ route('register') }}">
                    {{ __('Nao tem conta??') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-indigo-600 hover:bg-indigo-500 text-white">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

</body>
</html>
