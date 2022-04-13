<?php

/*

Faça um progama, com uma função que necessite de tres 
argumentos, e que forneça a soma desses argumentos atraves
da função
No script tambem deve fornecer a media dos 3 numeros por meio 
de uma segunda função;


*/   
    // callback
    functionResult();

    // result
    function functionResult(){
        $media = calcu(4, 1, 5);

        $total = ($media / 3);
        $value = $total;

        return print('<h1>Sua media é: '.intval($value).'</h1>');
    };

    // calc
    function calcu($n1 = 0, $n2 = 0, $n3 = 0){
        $value = 0;

        return $value = ($n1 + $n2 + $n3);
    };
    
?>