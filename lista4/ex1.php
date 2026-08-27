<?php

$idade = 16;
$ingresso = "sim";

echo "Bem vindo ao CineAmor <br>";

if($idade >= 18 && $ingresso == "Sim"){
    echo "Pode entrar e assitir o filme";
}
else{
    echo "Idade nao permitida ou sem ingresso!";
}
?>