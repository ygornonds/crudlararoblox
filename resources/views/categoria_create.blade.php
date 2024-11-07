@extends('master')
@include('nav')
@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Criar Categoria</h2>
    
    <form action="{{ route('categorias.store') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="nome" class="block text-gray-700 font-semibold mb-2">Nome:</label>
            <input 
                type="text" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                id="nome" 
                placeholder="Insira o nome da categoria" 
                name="nome"
                required
            >
        </div>
        <button 
            type="submit" 
            class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200"
        >
            Criar
        </button>
    </form>
</div>
@endsection
