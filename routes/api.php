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
            Route::get('fidelidade', function(Request $request){
                $produto = $request->input('number1');
                $resultado = $produto / 10;
                return 'O valor gasto é de ' . $produto . ', com os seus pontos são ' . $resultado ;
            });
            Route::get('comissao', function(Request $request){
                $produto = $request->input('number1');
            $desconto = $request->input('number2');
            $resultado = $desconto / 100 * $produto;
            $resultado2 = $produto + $resultado; 
             return 'O salario é de ' . $produto . ', com sua comissão de ' . $desconto . '%, o salario dele será de ' . $resultado2;
            });
            Route::get('day', function (Request $request) {
    
                $dias = $request->input('number1');
            
                $horas = $dias * 24;
            
                $minutos = $horas * 60;
            
                $segundos = $minutos * 60;
            
                $resultado = "dias: " . $dias . ", horas: " . $horas . ", minutos: " . $minutos . ", segundos: " . $segundos;
            
                return $resultado;
            });
            Route::get('mercado', function (Request $request){
                $compra = $request->input('number1');
                $produtos = $request->input('number2');
                $resultado = "Valor do produto: " . $compra * $produtos;
                return $resultado;
            });
            Route::get('exemplos', function (Request $request){
                $idade = $request->input('number1');
                $retorno = "";
                if($idade >= 18){
                $retorno = "Maior de idade";
                }
                else{
                    $retorno = "Menor de idade";
                }
                return $retorno;
            });

            Route::get('caixafast', function (Request $request){
                $item = $request->input('number1');
                $returne="";
                if($item <= 10){
                    $returne = "Pode passar nesse caixa ";
                }
                else{
                    $returne= "Não pode passar nesse caixa ";
                }
                return $returne;
            });

            Route::get('ver/par', function (Request $request){
                $number = $request->input('number1');
                if($number % 2 == 0){
                    return 'par';
                } else{
                    return 'impar';
                }

            });

            Route::get('impressão', function (Request $request){
                $item = $request->input('number1');
                $returne="";
                if($item > 10){
                    $returne = "É maior ";
                }
                else{
                    $returne= "É menor ";
                }
                return $returne;
            });

            Route::get('temp', function (Request $request){
                $temp = $request->input('number1');
                $returne="";
                if($temp <= 30){
                    $returne = "A temperatura atual é $temp ";
                }
                else{
                    $returne= "A temperatura atual é. $temp Está quente! ";
                }
                return $returne;
            });

            Route::get('programa/nm', function (Request $request){
                $temp = $request->input('number1');
                $returne="";
                if($temp > 0){
                    $returne = "O número é possitivo";
                } else if ($temp == 0){
                    $returne =  "Igual a 0";
                }
                else {
                    $returne = "Numero negativo";
                }
                return $returne;
            }); 

            Route::get('maiorde/dois', function (Request $request){

                $numero1 = $request->input('numero1');
                $numero2 = $request->input('numero2');
            
                if($numero1 > $numero2){
                    return "O número " . $numero1 . " é maior que " . $numero2;
                } else {
                    return "O número " . $numero1 . " é menor que " . $numero2;
                }
            
            });

            Route::get('divisivel', function (Request $request){

                $numero = $request->input('number1');
                if($numero % 3 == 0){
                 return 'O número ' . $numero . " É divisivel por 3";
                } else{
                 return 'O número ' . $numero . " Não é divisivel por 3";
                }
             
             });