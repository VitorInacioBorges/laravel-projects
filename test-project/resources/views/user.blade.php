@extends("layouts.main")

@section("title", "User")

@section("content")

    <h1> Users </h1>
    <a href="/"> Inicio </a>

    @if($id != null)
        <p> Exibindo id do user: {{ $id }} </p>
    @else
        <p> Pagina base sem ID </p>
    @endif

    @if($search != "")
        <p> Busca do Usuario: {{ $search }} </p>
    @endif

@endsection