<?php
$cores = array("red", "green", "blue", "yellow");
var_dump($cores);
$cores2 = ['red', 'green', 'blue', 'yellow'];
var_dump($cores2);
$cores2[] = "black";
var_dump($cores2);
foreach ($cores2 as $value) {
    echo $value . "\n";
}

$pessoa = [];
$pessoa['nome'] = "João";
$pessoa['idade'] = 19;
$pessoa['nascimento'] = '2004-11-11';

foreach ($pessoa as $key => $value) {
    echo $key . " : " . $value . "\n";
}

// sort - ordena pela chave
// asort - ordena pelo conteudo