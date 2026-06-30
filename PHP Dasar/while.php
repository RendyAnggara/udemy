<?php

// $angka = readline("Angka dimulai dari? "); //Input angka

// while ($angka <= 20) {
//     echo "ini adalah while-loop ke-$angka" . PHP_EOL;
//     $angka--;
// };


// //Contoh Membaca File Sampai Habis
// $file = fopen("data.txt", "r"); //membuka file

// while (!feof($file)) { //mengecek apakah sudah di akhir file
//     $baris = fgets($file); //membaca satu baris
//     echo $baris;
// }

// fclose($file);


// //Contoh soal GPT
$angka = readline("Angka dimulai dari? "); //Input angka

while ($angka >= 1) {
    echo "ini adalah while-loop ke-$angka" . PHP_EOL;
    $angka--;
}