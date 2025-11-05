<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola</title>
</head>
<body>
    <h1> Site Vitor </h1>
    @if($nome == "Vitor")
    <p> O nome é {{ $nome }} </p>
    @else 
    <p> Nao imprimo nomes </p>
    @endif
</body>
</html>