<?php

//trim -> retira espaços do inicio e do fim
//ltrim -> retira espaços so do lado esquedo da string
//rtrim -> retira espaços so do lado direito da string

$msg = "     HCODE     ";

var_dump(trim($msg));//retira os espacos do inicio e do fim
var_dump(ltrim($msg));//retira os espacos da esquerda
var_dump(rtrim($msg));//retira os espacos da direita
var_dump(trim($msg, "\t\n\r"));//retira quebra de linha,tabulaç~~ao e espaços