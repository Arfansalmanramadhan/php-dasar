<?php 
// operator Aritmatika
$a = 5;
$b = 5;

$hasil = $a + $b;
var_dump($hasil);

$hasilNegatif = -$hasil;
var_dump($hasilNegatif);
$hasilPositif = +$hasil;
var_dump($hasilPositif);

// operator penugasan

$total = 0;

$buah = 50000;
$ayam = 100000;
$jus = 10000;

$total += $buah;
$total += $ayam;
$total -= $jus;
var_dump($total);
// operator perbanndingan

var_dump("10" == 10);
var_dump("10" === 10);
var_dump(10 > 9);
var_dump(9 >= 9);
// operator logika 
var_dump(true && true);
var_dump(true && false);
var_dump(true || true);
var_dump(true || false);
var_dump(true xor true);
var_dump(true xor false);

var_dump(!true);
var_dump(!false);
?>