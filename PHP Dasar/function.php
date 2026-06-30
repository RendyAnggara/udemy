<?php

function angka() {
    for ($i=1; $i <= 20 ; $i++) { 
       if ($i % 3 == 0) {
        echo "Ini adalah kelipatan 3: $i" . PHP_EOL;
        continue;
       }
    }
}

angka();