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
    Route::get('senia', function(Request $request){
        $nome = $request ->input('nome');
        $idade = $request ->input('idade');
    
        return 'Meu nome é '. $nome . ', tenho ' . $idade . ' anos de idade';
    });
    Route::get('cidade', function(Request $request){
        $nome = $request -> input('nome');
        $idade = $request -> input('idade');
        $cidade  = $request -> input('cidade');

        return 'Meu nome é '. $nome . ', nasci no ano de '. $idade . ' na cidade de '. $cidade ;
    });