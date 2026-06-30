<?php

//Switch case sama seperti IF tetapi switch hanya bisa menggunakan perbandingan ==
//Jika hanya ingin menggunakan perbandingan == lebih baik memakai switch

$nilai = "E";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sempurna";
        break; // Break sebagai pemberhentian kode jika perbandingan sudah sesuai.

    case "B":
    case "C": //line 13 dan 14 digunakan ketika 2 case memiliki output (echo) yg sama (samam seperti memakai OR ||)
        echo "Anda lulus";
        break;

    case "D":
        echo "Anda harus mengulang Semester";
        break;

    default:
    echo "Anda Dikeluarkan";
}