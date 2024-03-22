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
                $retorno = "Você é Maior de idade";
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



             Route::get('lista1', function (Request $request){
                $number = $request->input('number1');
                $returne="";
                if($number > 10){
                    $returne = "É maior que 10. ";
                }
                else{
                    $returne= "É menor que 10. ";
                }
                return $returne;
            });


            Route::get('lista2', function (Request $request){
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



            Route::get('lista3', function (Request $request){
                $idade = $request->input('number1');
                $retorno = "";
                if($idade >= 18){
                $retorno = "Você é Maior de idade";
                }
                else{
                    $retorno = "Menor de idade";
                }
                return $retorno;
            });



            Route::get('lista4', function (Request $request){
                $number = $request->input('number1');
                if($number % 2 == 0){
                    return 'par';
                } else{
                    return 'impar';
                }

            });



            Route::get('lista5', function (Request $request){

                $numero1 = $request->input('number1');
                $numero2 = $request->input('number2');
            
                if($numero1 > $numero2){
                    return "O número " . $numero1 . " é maior que " . $numero2;
                } else {
                    return "O número " . $numero1 . " é menor que " . $numero2;
                }
            
            });



            Route::get('lista6', function (Request $request){

                $numero = $request->input('number1');
                if($numero % 9 == 0){
                 return 'O número ' . $numero . " é divisivel por 9";
                } else{
                 return 'O número ' . $numero . " não é divisivel por 9";
                }
             
             });



             Route::get('lista7', function (Request $request){
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



            Route::get('lista8', function (Request $request){
                $number = $request->input('number1');
                if($number % 7 == 0){
                    return 'O número ' . $number . " é múltiplo de 7 ";
                } else{
                    return 'O número ' . $number . " não é múltiplo de 7 ";
                }
            });



            Route::get('lista9', function (Request $request){
                $idade = $request->input('number1');
                $retorno = "";
                if($idade < 12){
                $retorno = "Você é uma criança";
                }
                else{
                    $retorno = "Você tem mais de 12 anos ";
                }
                return $retorno; 
            });



            Route::get('lista10', function (Request $request){
                $number = $request->input('number1');
                if($number > 0){
                    if($number % 2 != 0){
                    return "O número é positivo e ímpar ";
                    }}
            });



            Route::get('lista11', function (Request $request){
                $number = $request->input('number1');
                $returne="";
                if($number > 100){
                    $returne = "O número é maior que 100";
                } else if ($number == 100){
                    $returne =  "Número igual a 100";
                }
                else {
                    $returne = "Numero é menor que 100";
                }
                return $returne;
            }); 



            Route::get('lista12', function (Request $request){

                $number = $request->input('number1');
                if($number % 6 == 0){
                 return 'O número ' . $number . " é divisivel por 6";
                } else{
                 return 'O número ' . $number . " não é divisivel por 6";
                }
             
             });



             Route::get('lista13', function (Request $request){
                $nome = $request->input('name');
                if($nome =='Alice'){
                    return "Olá, Alice";
                }
                
            });



            Route::get('lista14', function (Request $request){
                $idade = $request->input('number1');
                $carteira = $request->input('number2');

                if($idade >= 18){
                    if($carteira == 'Sim') {
                    return "Você é maior de idade e possui carteira de motorista, então pode dirigir! ";
                } 
                else{
                    return "Você não pode dirigir, pois não possui carteira de motorista";
                }  
            } else {
                return "Você não pode dirigir! ";
            } 
            });



            Route::get('lista16', function (Request $request){

                $number1 = $request->input('number1');
                $number2 = $request->input('number2');
            
                if($number1 < $number2){
                    return "O número " . $number1 . " é menor que " . $number2;
                } else {
                    return "O número " . $number2 . " é menor que " . $number1;
                }
            
            });



            Route::get('lista17', function (Request $request){
                $idade = $request->input('number1');
                $name = $request->input('number2');

                if($idade >= 18){
                    if($name == 'Donatello') {
                    return "Você é maior de idade, Donatello! ";
                } 
                
            } 
            });



            Route::get('lista18', function (Request $request){

                $number1 = $request->input('number1');
                $number2 = $request->input('number2');
               
                    if($number1 == 0){
                    return "Não é possível efetuar a divisão pois o primeiro número é zero ";
                } else if ($number2 == 0){
                    return "Não é possível efetuar a divisão pois o segundo número é zero ";
            }else{
                    $resultado = ($number1 / $number2);
                    return "O resultado da divisão é " . $resultado;
            }
            });