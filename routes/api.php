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
    Route::get('Calculadora' , function (Request $request){ 

        $primerioNumero = $request->input('numeroUm');  
    
        $segundoNumero = $request->input('numeroDois');  
    
        $resultado = $primerioNumero + $segundoNumero; 
    
        return $resultado; 
    
        
    
    });
    Route::get('calculadora/dois' , function (Request $request){
    
        $primerioNumero = $request->input('numeroUm');
        $segundoNumero = $request->input('numeroDois');
        $terceiroNumero = $request->input('numeroTres');
    
        $resultado = $primerioNumero - $segundoNumero - $terceiroNumero;
        
    
        return $resultado;
     
    });
    Route::get('calculadora/divisao' , function (Request $request){
    
    
        $primerioNumero = $request->input('numeroUm');
    
        $segundoNumero = $request->input('numeroDois');
    
        $resultado = $primerioNumero / $segundoNumero;
    
        return $resultado;
    
    });
    Route::get('calculadora/multiplicacao' , function (Request $request){
    
    
        $primerioNumero = $request->input('numeroUm');
    
        $segundoNumero = $request->input('numeroDois');
    
        $resultado = $primerioNumero * $segundoNumero;
    
        return $resultado;
    
    });
    Route::get('media' , function (Request $request){
    
    
        $primeraNota = $request->input('notaUm');
    
        $segundaNota = $request->input('notaDois');
    
        $terceiraNota = $request->input('notaTres');
    
        $quartaNota = $request->input('notaQuatro');
    
        $quintaNota = $request->input('notaCinco');
    
        $resultado = ($primeraNota + $segundaNota + $terceiraNota + $quartaNota +$quintaNota) / '5';
    
        return $resultado;
    
    });
    Route::get('calculadora/divisao/dois' , function (Request $request){
    
    
        $primerioNumero = $request->input('numeroUm');
    
        $segundoNumero = $request->input('numeroDois');
    
        $resultado = $segundoNumero / $primerioNumero;
    
        return $resultado;
    
    });
    Route::get('dobro' , function (Request $request){

        $primerioNumero = $request->input('numero');
        $resultado = $primerioNumero * '2';
    
        return ' O dobro do número ' . $primerioNumero . ' é ' . $resultado; 
    
    
    });
    Route::get('retangulo' , function(Request $request){
        $primerioNumero = $request->input('number1');
    
        $segundoNumero = $request->input('number2');
    
        $resultado = $primerioNumero * $segundoNumero;
    
        return $resultado;

        }); 
        Route::get('desconto' , function(Request $request){
            $produto = $request->input('number1');
            $desconto = $request->input('number2');
            $resultado = $desconto / 100 * $produto;
            $resultado2 = $produto - $resultado; 
             return 'O preço do produto custa ' . $produto . ', com o desconto de ' . $desconto . ' %, ficará ' . $resultado2;
            });
            Route::get('salariobase' , function(Request $request){
                $produto = $request->input('number1');
            $desconto = $request->input('number2');
            $resultado = $desconto / 100 * $produto;
            $resultado2 = $produto + $resultado; 
             return 'O salario é de ' . $produto . ', com o aumento de ' . $desconto . '%, o salario dele será de ' . $resultado2;    
            });