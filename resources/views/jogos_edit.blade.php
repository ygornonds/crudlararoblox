@extends ('master')
<form action="{{route('jogos.update', ['jogo' => $jogo->id])}}" method="post">
@csrf
<div class="mb-3 mt-3">
    <h2>Atualizar</h2>
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Insira o nome" name="nome" value="{{$jogo->nome}}">
    <input type="hidden" name="_method" value="PUT">
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
