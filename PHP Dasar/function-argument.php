<?php


//Tanpa Default Argument
function name($first_name, $last_name) {
    echo "Selamat datang $first_name $last_name" . PHP_EOL;
}

name("asep", "Cihuy");

echo "=================" . PHP_EOL;

//Default argunment
function buah($name, $deskripsi = "Sehat, Bagus untuk tubuh") { //NOTED Default argumen harus digunakan pada argument yg belakang, jika di depan akan eror
    echo "$name : $deskripsi" . PHP_EOL;
}

buah("pepaya", "Bagus untuk melancarkan perut");
buah("pisang");

echo "=================" . PHP_EOL;

//Type Declaration
function hitung(int $a, int $b) {
    $total = $a * $b;
    echo "Hasil dari $a X $b adalah $total" . PHP_EOL;
}

hitung(20, 3);
hitung("5", "10"); // dari string akan diubah ke integer
hitung(true, false);// dari bool akan diubah ke integer
// hitung([], []);// dari array akan diubah ke integer walaupun eror


echo "=================" . PHP_EOL;

// Variable Argument list
function sumAll(...$values) {
    // $total = 0;
    $total = array_shift($values); // array_shift(untuk memanggil angka yg pertama / value parameter yg pertama)
    foreach ($values as $value) {
        $total -= $value;
    }
    echo "Total dari " . implode(" - ", $values) . " adalah $total" . PHP_EOL; 
}

sumAll(50,30);