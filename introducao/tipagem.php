<?php

declare(strict_types=1)

$codigo = 5;
$nome = "nome";
var_dump($codigo);
var_dump($nome);

function calcular_imc($peso, float $altura) : int {
    return $peso / (pow($altura, 2));
}

var_dump(calcular_imc(70, 1.75));