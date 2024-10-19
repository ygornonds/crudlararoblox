@extends ('master')
<h1>categoria selecionado | {{$categoria->nome}}</h1>
<form action="{{route('categorias.destroy', ['categoria' =>$categoria->id])}}" method="post">
@csrf
<div class="mb-3 mt-3">

    <input type="hidden" class="form-control" id="nome" name="_method"  value="delete">
  </div>
  <button type="submit" class="btn btn-danger">Deletar</button>
</form>
