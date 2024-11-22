@extends ('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif 

<a href="{{ route('jogos.create') }}"><button>Adicionar</button></a>
    
<div class="container mt-3">          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id:</th>
        <th>Nome:</th>
        <th>Categoria</th>
        <th>Criador</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($jogos as $jogo)
        <tr>
            <td>{{ $jogo->id }}</td>
            <td>{{ $jogo->nome }}</td>
            <td>{{ $jogo->categoria->nome }}</td> <!-- Certifique-se que a relação 'categoria' está definida corretamente -->
            <td>{{ $jogo->criador->nome }}</td> <!-- Certifique-se que a relação 'criador' está definida corretamente -->
            <td>
                <a href="{{ route('jogos.edit', $jogo->id) }}">Editar</a> |
                <a href="{{ route('jogos.show', $jogo->id) }}">Mostrar</a>
            </td>
        </tr> 
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
