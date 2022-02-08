<?php

$html = '<a href="https://hcode.com.br/blog">Acesse</a>';

var_dump(htmlentities($html));
// var_dump(htmlentities($html, ENT_NOQUOTES));//para a n ser executado pelo navegador, usamos o ENT_NOQUOTES para permitir mostrar as ""''(aspas)

$db = "&lt;a href=&quot;https://hcode.com.br/blog&quot;&gt;Acesse&lt;/a&gt;";

echo html_entity_decode($db); //pega o codigo que n é processado pelo navegador que passou pelo htmlentities e transforma em um codigo visivel e funcional para o navegar processar