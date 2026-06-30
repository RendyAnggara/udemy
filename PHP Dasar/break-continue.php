<?php


//Break
// $a = 1;

// while (true) {
//     echo "Angka ke-$a" . PHP_EOL;
//     $a++;

//     if ($a > 10) {
//         break;
//     }
    
// }

//Continue
for ($angka=1; $angka <= 20 ; $angka++) { 
    if ($angka % 2 == 1) {
        continue;
        
    }
    echo "Ini adalah: $angka" . PHP_EOL;
}