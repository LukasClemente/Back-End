<?php

function calcularMedia($nota1, $nota2, $nota3) {
    $resultado = ($nota1 + $nota2 + $nota3) / 3;
    return $resultado;
}

echo calcularMedia(7, 8, 9);
echo calcularMedia(5, 6, 7);
echo calcularMedia(10, 9, 8);

?>