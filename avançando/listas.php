<?php

// $idadeList = [21, 23, 19, 25, 30, 41, 18];
// $umaIdade = $idadeList[0];

// echo "$umaIdade" .PHP_EOL;

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[count($idadeList)] = 20;

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular  $saldo"
    );
}