<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <h1> Site Vitor </h1>

    @if($nome == "Vitor")
    <p> O nome é {{ $nome }} </p>
    @else 
    <p> Nao imprimo nomes que nao sejam Vitor </p>
    @endif

    <a href="/contact"> Contatos </a>

    @for($i = 0; $i < count($array); $i++)
        <p> {{ $array[$i] }} </p>
    @endfor

    @php
        $name = "Vitor";
        echo $name;
    @endphp

    {{-- ISSO E UM COMENTARIO --}}
</body>
</html>