<?php

$name = "rendy";
$name = NULL; // Value name terhapus / kosong
$age = "";

echo "Nama: ". $name;
echo "\n";
var_dump(is_null($age));

$contoh = null;
var_dump(isset($contoh)); //hasil nya akan true jika variable ada dan value tidak null karna memakai isset

var_dump(is_null($contoh)); //hasil tetap true walaupun null karna memakai is_null
