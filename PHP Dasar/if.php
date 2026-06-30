<?php

$nilai = 20;
$absen = 0;

if ($nilai >= 100 && $absen >= 90) {
    echo "Sangat Bagus.";
} elseif ($nilai >= 75 && $absen >= 80) {
    echo "Bagus, Kembangkan lagi.";
} elseif ($nilai >= 70 && $absen >= 75) {
    echo "Nilai Pas pasan Kembangkan lagi";
} elseif ($nilai >= 60 && $absen >= 70) {
    echo "Harus Remedial";
} else {
    echo "Tidak naik kelas";
}

