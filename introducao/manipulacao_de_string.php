<?php
$nome = "João";
$sobrenome = "Melo";

$nome_completo = $nome . " " . $sobrenome;
var_dump($nome_completo);
echo strtoupper($nome_completo);
echo strlen($nome_completo);
echo substr($nome . $sobrenome, 3, 3);
echo str_replace('o', 'a', $nome_completo);