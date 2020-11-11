<?php

$contador =1;

//while para limites um pouco menos claros
while($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador++;
}

//limites claros
for ($contador = 1; $contador <= 15; $contador++){
   if ($contador == 13) {
       //jump 13
       continue;
       //break;
   }
    echo "$contador" .PHP_EOL;
}