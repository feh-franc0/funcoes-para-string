<?php

// funcoes de string que nos ajudam a fazer contas, contar quantos caracteres tem em uma string ou etao contar quantas palavras tem em uma string

$msg = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam at enim, consequuntur, qui et voluptates consequatur quis ullam nobis iusto facere quae sunt tenetur ducimus ex aliquam eum veniam? Pariatur.";

echo strlen($msg) . " caracteres.\n";
echo str_word_count($msg) . " palavras\n";