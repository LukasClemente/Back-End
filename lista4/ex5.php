<?php

$aposta = 10;
$numero = 5;
$numero_sorteado = 5;

if($numero == $numero_sorteado){
    echo "Voce ganhou R$: ", $aposta*5;
}
else{
    echo "Quase acertou, seu numero: $numero <br>";
    echo "numero sortudo: ", $numero_sorteado+1;
}
?>