<?php

// impossibilida por tags, a não ser que permitam,nesse caso estamos permitindo apenas a tag strong de ser usada.Caso use qualquer outra sera enviado apenas a tag strong removendo as outras que n foram permitidas.

$comentario = 'Olá <a href="#"><strong>Hcode</strong></a>!';

echo strip_tags($comentario, "<strong>");
// echo strip_tags($comentario, "<strong><a>");