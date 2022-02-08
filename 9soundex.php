<?php

// usamos o soundex para comparar o som das strings
// temos tmb o metaphone q é mais apurado

$original = "Michael Jackson";

$search = "Maicael Jecsom";

var_dump(soundex($original) == soundex($search));