<?php

$values = ["apel", "jeruk", "pisang", "pepaya"];
var_dump(count($values)); //Mengambil dan menghitung seluruh total isi array

var_dump($values[1]);

$values[0] = "buah naga"; // menggantikan isi data index 0 (apel)
var_dump($values);

$values[] = "apel"; // menambahkan data baru 
var_dump($values);

unset($values[1]); // menghapus index 1 (jeruk)
var_dump($values);

echo ($values[2]); //menampilkan data index 2 (pisang)