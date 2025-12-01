<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Vitor";
    $array = [10, 20, 30, 40, 50];

    return view('welcome',
    [
        "nome" => $nome,
        "array" => $array,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
