<?php

$peso = 50;
$altura = 1.69;
$imc = $peso / $altura ** 2;

echo  "Seu IMC é de $imc. Você está com o IMC ";

if($imc < 18.5){
    echo  "Abaixo do ideal";
}else if($imc < 25){
    echo "Ok";
}else{
    echo "acima";
}

echo " do recomendado!!!!" .PHP_EOL;
