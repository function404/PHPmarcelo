<?php

/*

Faça um progama, com uma função que necessite de tres 
argumentos, e que forneça a soma desses argumentos atraves
da função
No script tambem deve fornecer a media dos 3 numeros por meio 
de uma segunda função;



*/

$valor = 0;

somar();

function somar(){
    $media = dividir(10, 10, 10);
    $valor = ($media / 3);
    return print('Média é: '.$valor);
};

function dividir($num1 = 0, $num2 = 0, $num3 = 0){
    return $value = ($num1 + $num2 + $num3);
};
?>