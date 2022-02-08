<?php

// ira mostrar o indice de onde comeca a palavra que foi pequisada, tem um terceiro parametro que serve para pular os indices e comecar a procurar dai

$msg = "hcode Treinamentos, acesse: https://hcode.com.br";

echo strpos($msg, "hcode", 10);
echo "\n";
echo stripos($msg, "treinamentos"); //stripos desconsidera o case sensitive

// no caso de fazer uma condicional IF tome cuidado ao usar o strpos pq o vamos do indice 0 é considerado false,entao opte por usar o str_contains

