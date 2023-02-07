<?php 

$nama = "Arfan";
$umur = 20;

echo "Nama : ";
echo $nama;
echo "<br>";
echo "Umur : ";
echo $umur;
// variable constant
define("nama", "Arfan Salman Ramadhan");
define("umur", 20);

echo "<br>";
echo "Nama : ";
echo nama;
echo "<br>";
echo "Umur : ";
echo umur;
echo "<br>";

// data null
$Nama = "Salman";
$Nama = NULL;

$Umur = NULL;

echo "Nama : " ;
echo $Nama;
echo "<br>";

echo "Umur : ";
echo $Umur;

echo "<br>";
echo "Nama null : ";
var_dump(is_null($Nama));
echo "<br>";
$siapa = "Arfan";
unset($siapa);
$siapa = "Salman";
$siapa = NULL;
var_dump(isset($siapa));
?>