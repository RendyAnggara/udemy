<?php

$data = ["apel", "jeruk", "pisang"];


foreach ($data as $buah) {
    echo "ini adalah buah: $buah" . PHP_EOL;
}

echo "=================" . PHP_EOL;

foreach ($data as $index => $buah) {
    echo "ini adalah buah: $buah dengan index: $index" . PHP_EOL;
}

echo "=================" . PHP_EOL;

$names = [
    "Nama awal" => "Rendy",
    "Nama tengah" => "Ansyah",
    "Nama belakang" => "Anggara"
];
foreach ($names as $key => $value) {
    echo "$key :  $value" . PHP_EOL;
}