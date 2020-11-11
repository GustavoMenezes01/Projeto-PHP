<?php

$idade = 18;
$nome = "Gustavo";
$numeroDePessoas = 2;


echo  "Voce só pode entar com 18 anos ou mais, ou a partir de 16 anos acompanhado " .PHP_EOL;

if ($idade == 18 || $idade > 18) {
    echo "Voce tem $idade anos." .PHP_EOL ;
    echo "Pode entrar sozinho" .PHP_EOL;
}else if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos. está acompanhado(a), então pode entar !! ";

    } else {
        echo "Vocẽ só tem $idade anos. Você não pode entar!!" . PHP_EOL;
    }


echo PHP_EOL;
echo"Adeus" .PHP_EOL;


//if ($idade >= 18 && $nome == "Gustavo") {
//    echo "Voce tem $idade anos." .PHP_EOL ;
//    echo "Pode entrar" .PHP_EOL;
//}