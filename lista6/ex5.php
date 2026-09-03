<?php

echo "1 - Jogar<br>";
echo "2 - Ver personagens<br>";
echo "3 - Ver ranking<br>";
echo "4 - Configurações<br>";
echo "5 - Sair<br><br><hr>";
$opcao = 2;

switch ($opcao) {
    case 1:
        echo "Iniciando jogo...";
        break;
    case 2:
        echo "Subaru, Emilia, Rem, Ram, Beatrice, Puck, Roswaal, Crusch, Anastasia, Felt, Otto, Wilhelm, Julius, Garfiel, Petra, Frederica, Reinhard ...";
        break;
    case 3:
        echo "1º - Subaru Natsuki | Flugel_R0<br>2º - Reinhard | Akira<br>3º - Garfiel | Miojo13...";
        break;
    case 4:
        echo "Abrindo configurações...";
        break;
    case 5:
        echo "Saindo do jogo...";
        break;
    default:
        echo "Opção inválida";
}
?>