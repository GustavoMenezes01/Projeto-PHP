<?php declare(strict_types=1);

namespace Alura;

require 'autoload.php';

//aula1

$notas = [9, 5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média de notas é: $media";
} else {
    echo "Não foi possível calcular a média";
}

//aula2

$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

foreach  ($saldos as $saldo) {
    echo "<p>O saldo é $saldo</p>";
}

sort($notas);

echo "<p>A menor nota é $notas[0]</p>";

sort($saldos);

echo "<p>O menor saldo é $saldos[0]</p>";

//aula3

$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode (", ", $nomes);

foreach ($array_nomes as $nome) {
    echo "<p>Olá $nome </p>";
}

$nomesJuntos = implode(",", $array_nomes);

echo "<p>$nomesJuntos</p>";

//aula4

$correntistas_e_compras = [
    "Giovanni",
     12,
    "Maria",
     25,
    "Luis",
    "Luísa",
    "12"
    ];

ArrayUtils::remover("Giovanni", $correntistas_e_compras);

// echo "<pre>"; // var_dump($correntistas_e_compras); // ArrayUtils::remover("Naoexiste", $correntistas_e_compras); // var_dump($correntistas_e_compras); // echo "</pre>";


//aula 5 
$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
  ];

  $relacionados = array_combine($correntistas, $saldos);

//   $relacionados["Matheus"] = 4500;

//     echo "<pre>";
//     var_dump ($relacionados);
//     echo "</pre>";

echo "<p>O saldo do Giovanni é: {$relacionados["Giovanni"]}</p>";

    if (array_key_exists("João", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
 } else {
    echo "Não foi encontrado";
 }

//  $maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

//     echo "<pre>";
//     var_dump($maiores);
//     echo  "</pre>";