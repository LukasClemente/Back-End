<?php

$peso = 73;
$altura = 1.75;
$resultado = $peso/($altura*$altura);

if($resultado >=19 && $resultado <= 24){
    echo "Peso Ideal";
}
elseif($resultado >=25 && $resultado <= 29){
    echo "Sobrepeso";
}
elseif($resultado >=30 && $resultado <= 34){
    echo "Obesidade Grau 1";
}
elseif($resultado >=30 && $resultado <= 39){
    echo "Obesidade Grau 2";
}
elseif($resultado >=40){
    echo "Obesidade Grau 3";
}
else{
    echo "Abaixo do peso ideal";
}
?>