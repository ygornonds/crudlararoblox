<x-guest-layout>
    <div class="container">d
        <div class="form-container">
        
            <div class="logo-container">
                <img src="{{ asset('images/roblox.svg') }}" alt="Logo">
                <span>Robz</span>
            </div>

            <h3>Cadastro</h3>
            <p>Crie uma conta para começar.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Nome')" />
                    <x-text-input id="name" class="input-field" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Senha')" />
                    <x-text-input id="password" class="input-field" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />
                    <x-text-input id="password_confirmation" class="input-field" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <div class="mt-6">
                    <x-primary-button class="btn-primary">
                        {{ __('Registrar') }}
                    </x-primary-button>
                </div>

                <div class="form-links mt-4">
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">
                        Já tem uma conta? Faça login
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

<style>
    body {
        background-color: #f0f0f0;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 0 20px;
    }

    .form-container {
        background: #1a1a1a;
        border-radius: 12px;
        width: 100%;
        max-width: 400px; 
        padding: 40px 30px; 
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    }

    .form-container h3 {
        font-size: 2rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 12px;
        text-align: center;
    }

    .form-container p {
        color: #d1d5db;
        font-size: 1rem;
        margin-top: 8px;
        margin-bottom: 24px;
        text-align: center;
    }

    .input-field {
        background-color: #333;
        border-radius: 8px;
        padding: 12px;
        width: 100%;
        border: 1px solid #444;
        color: #fff;
        margin-top: 12px;
        font-size: 1rem;
        outline: none;
        transition: border-color 0.3s ease;
    }

    .input-field:focus {
        border-color: #fff;
    }

    .input-label {
        color: #d1d5db;
        font-size: 0.875rem;
    }

    .btn-primary {
        background-color: #fff;
        color: #000;
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1.1rem;
        width: 100%;
        margin-top: 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #f0f0f0;
    }

    .form-links {
        display: flex;
        justify-content: center;
        margin-top: 16px;
    }

    .form-links a {
        color: #fff;
        font-size: 0.875rem;
        text-decoration: none;
    }

    .form-links a:hover {
        text-decoration: underline;
    }

    .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 24px;
    }

    .logo-container img {
        height: 48px;
        width: auto;
    }

    .logo-container span {
        color: #fff;
        font-size: 2rem;
        font-weight: 700;
        margin-left: 10px;
    }

    @media (max-width: 768px) {
        .form-container {
            padding: 30px 20px;
        }

        .form-container h3 {
            font-size: 1.5rem;
        }

        .form-container p {
            font-size: 0.875rem;
        }

        .btn-primary {
            font-size: 1rem;
        }
    }
</style>
