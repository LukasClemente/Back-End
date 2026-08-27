<?php

$email = "lc@gmail.com";
$senha = "1234";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "lc@gmail.com" && $senha == "123"){
    echo "Acesso Liberado <br>";
    header("location: https://www.facebook.com");
}
else{
    echo "Email ou senha invalida!";
}
?>