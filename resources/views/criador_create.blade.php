@extends('master')
@include('nav')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-800">
    <div class="bg-gray-900 p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-semibold text-gray-100 mb-6 text-center">Criar Categoria</h2>

        <form action="{{ route('criadores.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nome" class="block text-gray-200 text-sm font-semibold">Nome:</label>
                <input 
                    type="text" 
                    class="w-full bg-gray-700 text-gray-300 border border-gray-600 rounded px-4 py-2 mt-2" 
                    id="nome" 
                    placeholder="Insira o nome do criador" 
                    name="nome"
                    required
                >
            </div>

            <button 
                type="submit" 
                class="w-full bg-gray-600 text-white px-6 py-3 rounded hover:bg-gray-500 transition duration-200"
            >
                Criar
            </button>
        </form>
    </div>
</div>
@endsection
