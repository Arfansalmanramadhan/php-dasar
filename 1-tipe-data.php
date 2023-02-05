<?php
// tipe data number
echo "Desimal :";
var_dump(1234);
echo "<br>";
echo "Octal :";
var_dump(01234);
echo "<br>";
echo "Hexadecimal";
var_dump(0x1A);
echo "<br>";
echo "binary";
var_dump(0b111111);
echo "<br>";

echo "Underscore in number : ";
var_dump(1_241_241_241);
echo "<br>";

echo "Floating Point : ";
var_dump(1.234);
echo "<br>";

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);
echo "<br>";

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);
echo "<br>";


echo "Integer Overflow : ";
var_dump(9223372036854775808);
echo "<br>";


// tipe data String
echo "Nama: " ;
echo "Arfan Salman Ramadhan ";
echo "<br>";
echo "Name : ";
echo "Arfan\t Salman\t Ramadhan <br>";
echo "<br>";

echo <<<ARFAN
Arfan lagi belajar bahasa pemrograman php

ARFAN;
?>