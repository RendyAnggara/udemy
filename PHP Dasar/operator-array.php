<?php 

//Union

// $First = [
//     "Firstname" => "Rendy"
// ];

// $Last = [
//     "Lastname" => "Anggara"
// ];

// $fullname = $First + $Last;
// var_dump($fullname);


// //Equality
// $a = [
//     "name" => "asep",
//     "name2" => "ucup"
// ];

// $b = [
//     "name2" => "ucup",
//     "name" => "asep"
// ];

// var_dump($a == $b); //True
// var_dump($a === $b); //False

//Inequality 

// $a = [
//     "name" => "Rendyansyah"
// ];

// $b = [
//     "name" => "Eko Putra"
// ];

// var_dump($a != $b); //True

//Nonidentity 

$a = [
    "name" => "asep",
    "name2" => "ucup"
];

$b = [
    "name2" => "ucup",
    "name" => "asep"
];


var_dump($a !== $b); //True