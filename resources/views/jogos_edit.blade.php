@extends ('master')
@include('nav')
<div class="min-h-screen flex items-center justify-center bg-gray-900">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
        <form action="{{ route('jogos.update', ['jogo' => $jogo->id]) }}" method="post">
            @csrf
            @if($errors->any())
<div id="alert-2" class="flex items-center p-4 mt-4 mb-1 text-red-800 rounded-md bg-red-50 dark:bg-red-400 dark:text-red-900 w-1/2 mx-auto" role="alert">
    <svg class="flex-shrink-0 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Erro</span>
    <div class="ms-2 text-sm font-medium">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1 hover:bg-red-200 inline-flex items-center justify-center h-6 w-6 dark:bg-red-800 dark:text-red-400 dark:hover:bg-red-900" aria-label="Fechar" onclick="document.getElementById('alert-2').style.display='none'">
        <span class="sr-only">Fechar</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif
            @method('PUT')

            <div class="mb-4">
                <h2 class="text-2xl text-gray-200 font-semibold mb-4">Atualizar Jogo</h2>

                <label for="nome" class="block text-gray-200 text-sm font-semibold">Nome:</label>
                <input type="text" class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" id="nome" name="nome" value="{{ $jogo->nome }}" placeholder="Insira o nome" >
            </div>

            <div class="mb-4">
                <label for="id_categoria" class="block text-gray-200 text-sm font-semibold">Categoria:</label>
                <select id="id_categoria" name="id_categoria" class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" >
                    <option value="" disabled>Selecione uma categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $jogo->id_categoria == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="id_criador" class="block text-gray-200 text-sm font-semibold">Criador:</label>
                <select id="id_criador" name="id_criador" class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" >
                    <option value="" disabled>Selecione um criador</option>
                    @foreach ($criadores as $criador)
                        <option value="{{ $criador->id }}" {{ $jogo->id_criador == $criador->id ? 'selected' : '' }}>
                            {{ $criador->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="w-full bg-gray-600 text-white px-6 py-3 rounded hover:bg-gray-500 transition duration-200">Atualizar</button>
        </form>
    </div>
</div>
