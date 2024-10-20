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
{{session()->get('message')}}

@endif 
<a href="{{route('criadores.create')}}"><button>Adicionar</button></a>
    
    <div class="container mt-3">          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id:</th>
        <th>Nome:</th>
        <th>ações</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($criadores as $criador)
        
            <tr>
                <td>{{$criador->id}}</td>
                <td>{{$criador->nome}}</td>
                <td>
                    <a href="{{ route('criadores.edit', $criador->id) }}">Editar</a> |
                    <a href="{{ route('criadores.show', $criador->id) }}">Mostrar</a>
                </td>
            </tr> 

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>