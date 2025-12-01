@extends("layouts.main")

@section("title", "UBS System")

@section("content")

<h1> Site Vitor </h1>

@if($nome == "Vitor")
    <p> O nome é {{ $nome }} </p>
@else 
    <p> Nao imprimo nomes que nao sejam Vitor </p>
@endif

<a href="/contact"> Contatos </a> <br>
<a href="/user"> Users </a>
@for($i = 0; $i < count($array); $i++)
    <p> {{ $array[$i] }} </p>
@endfor

@php
    $name = "Vitor";
    echo $name;
@endphp

{{-- ISSO E UM COMENTARIO BLADE --}}

@endsection