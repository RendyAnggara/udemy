<?php

//$Angka = 1 (Init Statement)
// $angka <= 10 (Kondisi)
// $angka++; (Post Statement)


// //Cara Ke 1
// $angka = 1;
// for ( ; $angka <= 10 ; ) {
//     echo "Ini adalah looping ke-$angka" . PHP_EOL;
//     $angka++;
// };


// //Cara Ke 2
// for ($i=1; $i <=10 ; $i++) { 
//     echo "Ini adalah looping ke-$i" . PHP_EOL;
// };

// //Contoh Perulangan Berdasarkan Jumlah Data Tertentu
// $mahasiswa = ["Rendy", "Budi", "Sinta", "Dina"];

// for ($i = 0; $i < count($mahasiswa); $i++) {
//     echo "Nama: " . $mahasiswa[$i] . "\n";
// }



// Contoh soal GPT
// for ($i=1; $i <= 20; $i++) { 
//     if ($i % 2==0) {
//         echo "Ini adalah Genap: $i" . PHP_EOL;
        
//     }
// }


//Kelipatan 3
// for ($i=1; $i <=30 ; $i++) { 
//     if ($i % 3 == 0) {
//         echo "Ini adalah kelipatan 3 : $i" . PHP_EOL;
//     }
// }


//menampilkan Ganjil Genap
// for ($i=1; $i <= 20 ; $i++) { 
//     if ($i %2 == 0) {
//         echo "Genap: $i" . PHP_EOL;
//     } else {
//         echo "Ganjil: $i" . PHP_EOL;
//     }
// }


//Tampilkan angka dari 1 sampai 50
// Genap
// Dan lebih besar dari 20
// for ($i=1; $i <= 50 ; $i++) { 
//     if ($i %2 == 0) {
//         if ($i >= 20) {
//             echo "Genap: $i" . PHP_EOL;
//         }
//     }
// }



// // Hitung berapa banyak angka ganjil dari 1 sampai 100.
// $total = 0;

// for ($i=1; $i <=100 ; $i++) { 
//     if ($i % 2 !=0) {
//         $total++; //Menambahkan angka 1 ke variabel $total jika true
//     }
// }
// //Kenapa echo diluar looping dan if, karna kita mau mencetak ketika looping sudah selesai
// echo "Total angka ganjil 1-100: $total" . PHP_EOL;



// // Hitung berapa banyak angka dari 1 sampai 50 yang habis dibagi 5.
// $total = 0;

// for ($i=1; $i <=50 ; $i++) { 
//     if ($i % 5 == 0) {
//         $total++;
//     }
// }
// echo "Ini adalah kelipatan 5 : $total" . PHP_EOL;



// Hitung berapa banyak angka dari 1 sampai 100 yang :
// Genap
// Dan lebih besar dari 40
// $total = 0;

// for ($i=1; $i <= 100; $i++) { 
//     if ($i %2 == 0) {
//         if ($i >= 40) {
//             $total++;
//         }
//     }
// }
// echo "total angka genap 1-100 yg lebih besar dari 40 : $total" . PHP_EOL;



// Hitung berapa banyak angka dari 1 sampai 200 yang:
// Habis dibagi 4 Tapi tidak habis dibagi 8
// $total = 0;

// for ($i=1; $i <=200 ; $i++) { 
//     if ($i % 4 == 0) {
//         if ($i % 8 != 0 ) {
//             $total++;
//         }
//     }
// }

// echo "total angka genap 1-200 yg habis dibagi 4 tapi tak habis dibagi 8 : $total" . PHP_EOL;




// Tampilkan tabel perkalian angka 7 dari 1 sampai 10.
$defult = 7;
for ($angka=1; $angka <= 10 ; $angka++) {
    $total = $defult * $angka;
    echo "Tabel perkalian $defult X $angka = $total" . PHP_EOL;
}