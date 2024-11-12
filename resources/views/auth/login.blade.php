<!DOCTYPE html>
<html lang="pt-BR" class="text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robz - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Estilo geral da página */
        body {
            background-color: #f0f0f0; /* Cor de fundo cinza */
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
            min-height: 100vh;
            padding: 0 20px;
            width: 100%;
        }

        /* Caixa do formulário */
        .form-container {
            background: #1a1a1a;
            border-radius: 12px;
            width: 100%;
            max-width: 600px; /* Largura aumentada */
            padding: 40px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        /* Estilo do título e descrição */
        .form-container h3 {
            font-size: 2rem;
            font-weight: 600;
            color: #fff;
        }

        .form-container p {
            color: #d1d5db;
            font-size: 1rem;
            margin-top: 8px;
        }

        /* Separador */
        .separator {
            margin-top: 16px;
            height: 1px;
            background: linear-gradient(to right, transparent, #fff, transparent);
        }

        /* Inputs e botões */
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

        .checkbox-label {
            font-size: 0.875rem;
            color: #d1d5db;
        }

        .form-links {
            display: flex;
            justify-content: space-between;
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

        /* Responsividade para telas menores */
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
</head>
<body>

    <div class="container">
        <div class="form-container">
            <!-- Logo e Título -->
            <div class="logo-container">
                <img src="{{ asset('images/roblox.svg') }}" alt="Logo">
                <span>Robz</span>
            </div>

            <h3>Login</h3>
            <p>Bem-vindo de volta, insira suas credenciais para continuar.</p>

            <!-- Formulário de login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Campo de email -->
                <div>
                    <label for="email" class="input-label">Email</label>
                    <x-text-input 
                        id="email" 
                        class="input-field" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
                        autocomplete="username" 
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Campo de senha -->
                <div class="mt-4">
                    <label for="password" class="input-label">Senha</label>
                    <x-text-input 
                        id="password" 
                        class="input-field" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="current-password" 
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Lembrar de mim -->
                <div class="mt-4">
                    <label for="remember_me" class="checkbox-label">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            name="remember" 
                            class="focus:ring-white" 
                        />
                        Lembrar de mim
                    </label>
                </div>

                <!-- Botão de Login -->
                <button type="submit" class="btn-primary">Entrar</button>

                <!-- Links para recuperação e registro -->
                <div class="form-links">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                    @endif
                    <a href="{{ route('register') }}">Não tem conta?</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
