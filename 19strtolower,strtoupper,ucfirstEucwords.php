<?php

// vamos aprender a formatar as strings,formatar para minusculo,maiusculo,primeira letra em maiusculo o resto em minusculo 

$nome = "JOão HEnrIque rAngel";

echo strtolower($nome) . "\n";
echo strtoupper($nome) . "\n";
echo mb_strtoupper($nome) . "\n";
echo ucfirst(strtolower($nome)) . "\n";
echo ucwords(strtolower($nome)) . "\n";

$nome = "JOão;HEnrIque;rAngel";
echo str_replace(";", " ",ucwords(strtolower($nome),";")) . "\n";