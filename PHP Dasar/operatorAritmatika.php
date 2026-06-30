<?php

$total = 0;

$makanan = 10000;
$minuman = 5000;
$cemilan = 3000;

// $total = $minuman += $makanan += $cemilan;
// var_dump($total);

$total += $makanan;
$total += $minuman;
$total += $cemilan;

var_dump($total);