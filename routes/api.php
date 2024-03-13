<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (Request $request){
    $name = $request -> input('name');
    return $name;
    });

    Route::get('calcular/media', function(Request $request){
        
        $primeiraEntrada = $request -> input('primeiraNote');
        $segundaEntrada = $request -> input('segundaNota');
    
        $media = ($primeiraEntrada + $segundaEntrada)/2;
        return $media;
    });