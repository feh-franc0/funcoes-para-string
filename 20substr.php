<?php

// Função coringa, passo uma string, um valor inicial e a quantidade de caracteres. Conseguimos pegar pedaços de um determinado string e fazer o que quiser com esse pedaço
function getDomain($url)
{
    $inicio = strpos($url, "://")+3;

    $dominio = substr($url, $inicio, strlen($url));

    return substr($dominio, 0, strpos($dominio, "/"));
}

echo getDomain("https://hcodelab.com.br/blog");