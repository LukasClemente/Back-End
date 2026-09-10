<?php

$senhaCorreta = "1234";
$senha = "1111";
$try = 0;

while($try<3){
    if($senha==$senhaCorreta){
        echo "Senha correta! Acesso permitido.";
        break;
    }else{
        echo "Senha incorreta!<br>";
    }
    $try++;
}

?>