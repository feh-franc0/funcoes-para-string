<?php

// addslashes adiciona barras ,sempre para escapar algum caracter especial como aspas simples por exemplo
// stripslashes retirar as barras

// $msg = "Caixa d'água"; //vai adicionar a barra
// echo addslashes($msg);

$msg = 'Caixa D\'água'; //vai remover a barra
echo stripslashes($msg);