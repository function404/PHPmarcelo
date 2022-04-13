<?php

// entrada
// processamento
//saida

/*
Funcao somar..
- numero 1
- numero 2

processamento
-pegar o numero 1 e adicionar o numero 2

resultado
- A soma do numero 1 e numero 2

exemplo:
Somar 1 3 = 4
somar 10 5 = 15
somar 132409878 24836780 = ??????? não da


$lista = [10, 6, 8];
print_r($lista);
print "<br>";
print_r($lista);
*/


function somar($num1 = 0, $num2 = 0, $num3 = 0){
    $total = $num1 + $num2 + $num3;
    return $total;
};

$x = somar(89, 3);
$y = somar(5, 7);
$w = somar($x, $y);
echo "Total: ".$w;
?>