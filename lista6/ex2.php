<?php

$opcao = 2;
$saldo = 500;

switch ($opcao) {
    case 1:
        echo "Saldo atual é: R$ $saldo";
        break;
    case 2:
        echo "Você escolheu: sacar dinheiro.";
        break; 
    case 3:
        echo "Você escolheu: depositar dinheiro.";
        break;
    case 4:
        echo "Você escolheu: consultar extrato.";
        break;
    default:
        echo "Opção inválida.";
}

?>