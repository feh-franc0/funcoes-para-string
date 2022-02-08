<?php

// str_pad padroniza o tamanho da string, adicionando algum caracter para conseguir padronizar o tamanho da string

$nome = "João Rangel";
$email = "joao@hcode.com.br";
$idade = 30;

echo str_pad($nome, 35, ".", STR_PAD_LEFT) . "\n";
echo str_pad($email, 35, ".", STR_PAD_BOTH) . "\n";
echo str_pad($idade, 35, ".", STR_PAD_RIGHT) . "\n";