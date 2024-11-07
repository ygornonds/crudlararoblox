@extends('master')
@include('nav') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100"> <!-- Background cinza claro para toda a página -->

<div class="min-h-screen flex items-center justify-center"> <!-- Centraliza o conteúdo -->
    <div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg"> <!-- Conteúdo centralizado com padding e borda arredondada -->
        
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-3 rounded mb-6 text-center">
                {{ session()->get('message') }}
            </div>
        @endif

        <a href="{{ route('criadores.create') }}">
            <button class="bg-gray-800 text-white px-6 py-3 rounded hover:bg-gray-600 transition duration-200 mb-6 inline-block">
                Adicionar
            </button>
        </a>

        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left text-gray-300 bg-gray-800 rounded-lg shadow-md">
                <thead>
                    <tr>
                        <th class="px-4 py-3 text-gray-100">ID</th>
                        <th class="px-4 py-3 text-gray-100">Nome</th>
                        <th class="px-4 py-3 text-gray-100">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($criadores as $criador)
                        <tr class="hover:bg-gray-700">
                            <td class="px-4 py-3 border-b border-gray-700">{{ $criador->id }}</td>
                            <td class="px-4 py-3 border-b border-gray-700">{{ $criador->nome }}</td>
                            <td class="px-4 py-3 border-b border-gray-700">
                                <a href="{{ route('criadores.edit', $criador->id) }}" class="text-blue-500 hover:text-blue-300 transition duration-150">Editar</a> |
                                <a href="{{ route('criadores.show', $criador->id) }}" class="text-blue-500 hover:text-blue-300 transition duration-150">Mostrar</a>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>

</body>
</html>
