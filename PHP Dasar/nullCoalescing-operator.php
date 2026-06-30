<?php

$data = [
    "action" => "Create"
];

$cek = $data["action"] ?? "Nothing"; //Mengecek apakah array $data memiliki value

echo $cek;