@extends ('master')
@include ('nav')
<div class="min-h-screen flex items-center justify-center bg-gray-800"> 
    <div class="bg-gray-900 p-8 rounded-lg shadow-lg w-full max-w-md"> 
        <form action="{{ route('jogos.store') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="nome" class="block text-gray-200 text-sm font-semibold">Nome:</label>
                <input type="text" class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" id="nome" placeholder="Insira o nome" name="nome" required>
            </div>

            <div class="mb-4">
                <label for="id_categoria" class="block text-gray-200 text-sm font-semibold">Categoria:</label>
                <select name="id_categoria" id="id_categoria" class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" required>
                    <option value="" disabled selected hidden>Selecione uma categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="id_criador" class="block text-gray-200 text-sm font-semibold">Criador:</label>
                <select name="id_criador" id="id_criador" class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" required>
                    <option value="" disabled selected hidden>Selecione um criador</option>
                    @foreach ($criadores as $criador)
                        <option value="{{ $criador->id }}">{{ $criador->nome }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="w-full bg-gray-600 text-white px-6 py-3 rounded hover:bg-gray-500 transition duration-200">Criar</button>
        </form>
    </div>
</div>
