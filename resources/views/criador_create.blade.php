@extends ('master')
<form action="{{route('criadores.store')}}" method="post">
@csrf
<div class="mb-3 mt-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Insira o nome" name="nome">
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
