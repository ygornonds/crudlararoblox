@extends('master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Tailwind CSS CDN (caso não tenha no seu master layout) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

    <!-- Barra de navegação -->
    <nav class="bg-gray-900 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="text-lg font-semibold">MyApp</div>

            <div class="space-x-4">
                <a href="{{ route('categorias.index') }}" class="hover:text-gray-300 transition duration-200">Categorias</a>
                <a href="{{ route('criadores.index') }}" class="hover:text-gray-300 transition duration-200">Criadores</a>
                <a href="{{ route('jogos.index') }}" class="hover:text-gray-300 transition duration-200">Jogos</a>
            </div>
        </div>
    </nav>


</body>
</html>
