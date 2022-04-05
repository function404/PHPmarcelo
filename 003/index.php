<?php 

    echo "Aula php <br>";
    print("Receita de bolo <br>"); 

    /*
    $incgredientes=[
        'açucar',
        'trigo',
        'ovos',
        'leite',
        'azeite',
        'fermento'
    ];
 
    echo $ingredientes[0]. "<br>";
    echo $ingredientes[1]. "<br>";
    echo $ingredientes[2]. "<br>";
    echo $ingredientes[3]. "<br>";
    echo $ingredientes[4]. "<br>";
    echo $ingredientes[5]. "<br>";
 
 

    // CONDICiONAl TERNÁRIO
    $age = 16;
  
    $result = ($age > 18)?'Maior de idade':'Menor de idade';
    echo $result;
  
    // Segundo exemplo
 
    $menor = ($age <= 18)?true:false;
    if($menor){
       echo'Maior de idade';
    } else {
       echo'Menor de idade';
    }

     
    // NULL LAO
    $nome = 'Lincoln';
    $sobrenome = 'Mezzalira';
 
    $fullname = $nome;
    $fullname .= isset($sobrenome)?$sobrenome:''; // 1ª forma
    $fullname .= $sobrenome ?? ''; //1ª forma 


    // CONDIÇAO SWITCH - CASE
    $tipo = 'foto';

    switch($tipo){
        case 'foto': echo 'Exibindo um foto <br> '; break;
        case 'video': echo 'Exibindo um video <br> '; break;
        case 'text': echo 'Exibindo um text <br> '; break;
        default : echo 'Valor inválido <br> '; break;
    }

    if($tipo == 'foto'){
        echo 'Exibindo um foto';
    } 
    if($tipo == 'video'){
        echo 'Exibindo um video';
    }
    if($tipo == 'text'){
        echo 'Exibindo um text';
    } 


    // DO-WHILE
    $numero = 0;
        
    do {
        echo"-".$numero."<br/>";
        $numero++; 
    } while($numero<10); */

    $i;
    for ($i = 0; $i < 10; $i++){
        for ($x = 0; $x < 10; $x++){
        echo'-';
        }
        echo'<br>';
    };
?>