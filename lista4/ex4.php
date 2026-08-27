<?php

$email = "lc@gmail.com";
$senha = "123";
$status = "desativado";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "lc@gmail.com" && $senha == "123" && $status == "ativa"){
    echo "Acesso Liberado <br>";
    header("location: https://www.facebook.com");
}
else{
    echo "Email ou senha invalida!";
}
?>