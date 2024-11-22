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
<body class="bg-gray-100"> 

<div class="min-h-screen flex items-center justify-center"> 
    <div class="w-full max-w-4xl bg-gray-900 p-6 rounded-lg shadow-lg"> 
        
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-3 rounded mb-6 text-center">
                {{ session()->get('message') }}
            </div>
        @endif
        <h2 class="text-3xl font-semibold text-gray-100 mb-6 text-center">Jogos</h2>
        <a href="{{ route('jogos.create') }}">
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
                        <th class="px-4 py-3 text-gray-100">Categoria</th>
                        <th class="px-4 py-3 text-gray-100">Criador</th>
                        <th class="px-4 py-3 text-gray-100">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jogos as $jogo)
                        <tr class="hover:bg-gray-700">
                            <td class="px-4 py-3 border-b border-gray-700">{{ $jogo->id }}</td>
                            <td class="px-4 py-3 border-b border-gray-700">{{ $jogo->nome }}</td>
                            <td class="px-4 py-3 border-b border-gray-700">{{ $jogo->categoria->nome }}</td>
                            <td class="px-4 py-3 border-b border-gray-700">{{ $jogo->criador->nome }}</td>
                            <td class="px-4 py-3 border-b border-gray-700">
                                <a href="{{ route('jogos.edit', $jogo->id) }}" class="text-blue-500 hover:text-blue-300 transition duration-150">Editar</a> |
                                <a href="{{ route('jogos.show', $jogo->id) }}" class="text-blue-500 hover:text-blue-300 transition duration-150">Mostrar</a>
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
