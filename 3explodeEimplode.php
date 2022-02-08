<?php

// explode ira transformar nossa string em array passando o delimitador 

// $msg = "one|two|three|four|five";
// var_dump(explode("|", $msg)); //ira se tornar um array,onde a divisao sera pelo |

$colors = ["red", "blue", "black", "white"];
var_dump(implode("|", $colors));