<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800"> <!-- Aplica o fundo cinza escuro na página toda -->
    <div class="container mx-auto p-4"> <!-- Adiciona padding e centraliza o conteúdo -->
        @yield('content')
    </div>
</body>
</html>
