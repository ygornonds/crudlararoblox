@extends('master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <nav class="bg-gray-900 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
           
            <div class="flex items-center space-x-2">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <img src="{{ asset('images/roblox.svg') }}" alt="Logo" class="w-12 h-12 object-contain"> 
                    <span class="text-lg font-semibold">Robz</span>
                </a>
            </div>
            
            <div class="space-x-4 flex items-center"> 
                <a href="{{ route('categorias.index') }}" class="hover:text-gray-300 transition duration-200">Categorias</a>
                <a href="{{ route('criadores.index') }}" class="hover:text-gray-300 transition duration-200">Criadores</a>
                <a href="{{ route('jogos.index') }}" class="hover:text-gray-300 transition duration-200">Jogos</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white hover:bg-red-700 transition duration-200 py-2 px-4 rounded">
                        Sair
                    </button>
                </form>
            </div>
        </div>
    </nav>

</body>
</html>
