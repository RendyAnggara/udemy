<?php

$sayHello = function ($name) {
    echo "Helllo $name" . PHP_EOL;
};

$sayHello("Rendy");

echo "=============" . PHP_EOL;


//Contoh Dengan Anonymus function sebagai Argument

echo "=============" . PHP_EOL;

//Contoh dengan Use
$firstname = "Rendy";
$lastname = "Anggara";

$Fullname = function () use ($firstname, $lastname) {
    echo "Hello $firstname $lastname" . PHP_EOL;
};

$Fullname();