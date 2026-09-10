<?php

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$maior_atual = $lista[0];

foreach ($lista as $indice){
    if ($indice >= $maior_atual){
        $maior_atual = $indice;
    }
}

echo"$maior_atual";

?>
