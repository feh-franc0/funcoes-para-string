<?php

// str_starts_with: busca uma string que comece com um determinado trexo 
// str_ends_with: busca uma string que termine com determinado trexo

$msg = "Prof. Glaucio Daniel";
// $msg = "Prof. João Rangel";
// $msg = "Prof. Anthony Rafael";

var_dump(str_starts_with($msg, "Prof"));
var_dump(str_ends_with($msg, "el"));