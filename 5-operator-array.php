<?php 
$depan = [
    "nama_depan" => "Arfan"
];
$belakang = [
    "nama_belakang" => "Salman Ramadhan"
];
$lengkap = $depan + $belakang;
var_dump($lengkap);
$a = [
    "nama_depan" => "Arfan",
    "nama_belakang" => "Salman Ramadhan"
];
$b = [
    "nama_belakang" => "Salman Ramadhan",
    "nama_depan" => "Arfan"
];

var_dump($a == $b);
var_dump($a === $b);