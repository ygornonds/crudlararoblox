@extends ('master')
<form action="{{route('jogos.store')}}" method="post">
@csrf
<div class="mb-3 mt-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Insira o nome" name="nome">
    <select name="id_categoria" id=""><option value="" disabled select hidden >selecione uma categoria</option>
    @foreach ($categorias as $categoria)
      <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
    @endforeach
  </select>
  <select name="id_criador" id=""><option value="" disabled select hidden >selecione uma categoria</option>
    @foreach ($criadores as $criador)
      <option value="{{$criador->id}}">{{$criador->nome}}</option>
    @endforeach
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
