<?php

// ini akan menambahkan nilai A (10) lalu meyimpan ke dalam variable B
$a = 10;
$b = ++$a;

//variable B akan menyimpan nilai A (10) lalu nilai A akan ditambah (+1)
$a = 10;
$b = $a++;

var_dump($a);
var_dump($b);