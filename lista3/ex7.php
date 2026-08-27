<?php

$valor = 17;
$valorMinimaEntrega = 15;
$idadeCliente = 18;
$idadeMinimaBebidaAlcoolica = 18;
$estoque = 10;
$quantidadePedida = 0;

if($valor >= $valorMinimaEntrega){
    if($idadeCliente >= $idadeMinimaBebidaAlcoolica){
        if($estoque>=$quantidadePedida){
            echo "Conseguiu comprar, tem idade o suficiente e agora o tem ", $estoque, " no estoque";
        }
        else{
            echo "Não tem esse produto no estoque";
        }
    }
    else{
        echo "Não tem idade o suficiente";
    }
}
else{
    echo "Não tem dinheiro o suficiente";
}
?>