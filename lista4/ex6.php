<?php

$idade = 60;
$deficiencia = "sim";
$gestante = "sim";

if($idade>=60 || $deficiencia=="sim" || $gestante == "sim"){
    echo "Atendimento prioritário";
}
else{
    echo "Atendimento normal";
}
?>