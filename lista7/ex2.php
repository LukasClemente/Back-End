<?php

$idade = 17;

function verificarIdade($idade) {
    if($idade >= 18) {
        return "Maior de idade.";
    } else {
        return "Menor de idade.";
    }
}
echo verificarIdade(17);
echo verificarIdade(44);
echo verificarIdade(15);
echo verificarIdade(18);

?>