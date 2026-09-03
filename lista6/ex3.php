<?php

$opcao = 2;
echo "1 - Suporte técnico<br>";
echo "2 - Segunda via da fatura<br>";
echo "3 - falar com um atendente<br>";
echo "4 - sair<br><br>";

switch ($opcao) {
    case 1:
        echo "Você escolheu: Suporte técnico.";
        break;
    case 2:
        echo "Você escolheu: Segunda via da fatura.";
        break; 
    case 3:
        echo "Você escolheu: falar com um atendente.";
        break;
    case 4:
        echo "Você escolheu: sair.";
        break;
    default:
        echo "Opção inválida.";
}
?>