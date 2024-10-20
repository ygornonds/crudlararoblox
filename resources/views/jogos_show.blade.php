@extends ('master')
<h1>criador selecionado | {{$criador->nome}}</h1>
<form action="{{route('jogos.destroy', ['jogo' =>$jogo->id])}}" method="post">
@csrf
<div class="mb-3 mt-3">

    <input type="hidden" class="form-control" id="nome" name="_method"  value="delete">
  </div>
  <button type="submit" class="btn btn-danger">Deletar</button>
</form>
