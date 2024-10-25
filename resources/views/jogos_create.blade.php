@extends ('master')

<form action="{{ route('jogos.store') }}" method="post">
    @csrf
    <div class="mb-3 mt-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Insira o nome" name="nome" required>
    </div>

    <div class="mb-3">
        <label for="id_categoria" class="form-label">Categoria:</label>
        <select name="id_categoria" id="id_categoria" class="form-select" required>
            <option value="" disabled selected hidden>Selecione uma categoria</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="id_criador" class="form-label">Criador:</label>
        <select name="id_criador" id="id_criador" class="form-select" required>
            <option value="" disabled selected hidden>Selecione um criador</option>
            @foreach ($criadores as $criador)
                <option value="{{ $criador->id }}">{{ $criador->nome }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Criar</button>
</form>
