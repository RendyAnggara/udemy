<?php

function FU(){
    echo "FU" . PHP_EOL;
}

$memanggil = "FU";
$memanggil();

echo "================" . PHP_EOL;

function sayHello(string $name, $filter) {

    $filtername = $filter($name);
    echo "Hello $filtername" . PHP_EOL;
}

sayHello("rendy", "strtoupper");


