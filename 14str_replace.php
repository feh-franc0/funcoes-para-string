<?php

// serve para fazermos mudanças, buscar parte de uma determinado string e mudar por outra

$msg = "https://hcode.com.br/blog";

// echo str_replace("/blog", "/cursos", $msg);
echo str_replace("/blog", "/cursos", $msg, $total);

// echo "\n";

echo $total . " afetados!";