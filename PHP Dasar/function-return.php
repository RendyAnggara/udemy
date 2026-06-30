<?php

//mengkalikan 2 angka
function kali(int $a, int $b) {
    return $a * $b;
}

$jumlah = kali(5, 4);
echo $jumlah . PHP_EOL;

echo "=============" . PHP_EOL;


//Menghitung luas persegi Sisi X sisi
function luasPersegi(int $sisi) {
    return $sisi * $sisi;
}

$hasil = luasPersegi(2);
echo $hasil . PHP_EOL;

echo "=============" . PHP_EOL;


//Mengecek angka Genap atau ganjil
function cekGenap(int $angka) {
    if ($angka % 2 == 0) {
        return "Ini adalah genap";
    } else {
        return "Ini adalah ganjil";
    }
}

$cekAngka = cekGenap(11);
echo "$cekAngka" . PHP_EOL;


echo "=============" . PHP_EOL;


//Menentukan Grade nilai
function grade(int $value) {
    if ($value >= 80) {
        return "Sangat bagus (A)";
    } elseif ($value >= 70) {
        return "Bagus (B)";
    } elseif ($value >= 60) {
        return "Kurang memuaskan (C)";
    } else {
        return "Tidak memuaskan (D)";
    }
}

$nilai = grade(74);
echo $nilai;

echo "=============" . PHP_EOL;