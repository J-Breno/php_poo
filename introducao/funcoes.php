<?php

global $total; // má pratica colocar variáveis globais

function calcular_imc(float $peso, float $altura): float {
    return $peso / (pow($altura, 2));
}

echo calcular_imc(75, 1.75);

function percorre($km) {
    static $total; // ela guarda o valor passado dentro da função, porém ela não é global
    $total += $km;
    print "\npercorre mais $total km";
}


percorre(100);
percorre(100);
percorre(100);

$remove_acento = function ($str) {
    return str_replace(
        ['á', 'é', 'í', 'ó', 'ú'],
        ['a', 'e', 'i', 'o', 'u'],
        $str);
};

var_dump($remove_acento("bábébíbóbú"));