<?php /*
define("PI", 3.14, false);
define("idade",17, true);

echo "valor de PI = ".PI."<br>";

$msg = "mundo!";

echo "$msg hoje faz sol <br>";
echo "Ola, $msg <br>";
echo "Ola ".$msg." agora esta fazendo chuva! ";

echo "eu tenho ".idade." anos";


$valor = -0.23333;
 
if($valor <= 0){
   echo "Negativo";
}else{
   echo "Positivo";
}else{
    echo "Zero";
};
*/
for($i=0; $i<10; $i++){
   for($x=0; $x<10; $x++){
      echo "-";
   };
   echo"<br>";
};

for($i=1; $i<20; $i++){
   for($x=0; $x<$i; $x++){
      echo "-";
   };
   echo"<br>";
};

?>