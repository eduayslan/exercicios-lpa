<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome/usuario', function(Request $request){
    $nomeUsuario = $request -> input('primeiroUsuario');
    return $nomeUsuario;
});