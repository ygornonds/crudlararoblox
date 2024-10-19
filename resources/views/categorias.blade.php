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
<a href="{{route('categorias.create')}}"><button>Adicionar</button></a>
    
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
    @foreach ($categorias as $categoria)
        
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nome}}</td>
                <td>
                    <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a> |
                    <a href="{{ route('categorias.show', $categoria->id) }}">Mostrar</a>
                </td>
            </tr> 

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>