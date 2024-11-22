@extends ('master')
@include('nav')
<div class="min-h-screen flex items-center justify-center bg-gray-900">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
        <form action="{{ route('jogos.update', ['jogo' => $jogo->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h2 class="text-2xl text-gray-200 font-semibold mb-4">Atualizar Jogo</h2>

                <label for="nome" class="block text-gray-200 text-sm font-semibold">Nome:</label>
                <input type="text" class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" id="nome" name="nome" value="{{ $jogo->nome }}" placeholder="Insira o nome" required>
            </div>

            <button type="submit" class="w-full bg-gray-600 text-white px-6 py-3 rounded hover:bg-gray-500 transition duration-200">Atualizar</button>
        </form>
    </div>
</div>
