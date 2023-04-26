<?php
if (true){
    function say(){
        echo "ARFAN SALMAN RAMADHAN";
    }
}
say();
// Function Argument
echo "<br>";
function nama($name){
    echo "Halo $name";
}
nama("arfan");
echo "<br>";
function hal($namade= "Arfan", $namabe="Salman Ramadhan"){
    echo "halo $namade $namabe";
}
hal("Azzam", "Salman H");
// hal("Salman Ramadhan");
echo "<br>";
function sum(int $pertama, int $kedua){
    $total = $pertama * $kedua;
    echo "Total $pertama * $kedua = $total";
}
sum(5,20);
sum("5","20");
sum(true, false );
echo "<br>";
function sumAll(...$hasil){
    $total = 0;
    foreach ($hasil as $hasill) :
        $total += $hasill;
    endforeach;
    echo "Total ". implode(",", $hasil). "= $total";

}
$hasil = [1,2,3,4,10];
sumAll(1,2,3,4,5);
sumAll(...$hasil);
// function return
echo "<br>";
function nilai(int $pertama, int $kedua): int {
    $total = $pertama + $kedua;
    return $total;
}
var_dump(nilai(10,25));
echo "<br>";
function fizzbuzz( $a, $b){
    for($a = 1; $a < $b + 2; $a++){
        if($a % 3 == 0 && $a % 5 == 0){
            echo "Fizzbuzz". "<br>";
        } else if ($a % 3 == 0){
            echo "Fizz". "<br>";
        }else if ($a % 5 == 0) {
            echo "buzz". "<br>";
        } else {
            echo $a. "<br>";
        }
    }
}
$c = fizzbuzz("total",20);
echo $c;
echo "<br>";
function hasilnilai(int $nilai, int $absen): string {
    if($nilai >= 80 && $absen >= 75){
        return "A";
    } else if ($nilai >= 70 && $absen >= 75){
        return "AB";
    } else if ($nilai >= 65 && $absen >= 75){
        return "B";
    } else if ($nilai >= 60 && $absen >= 75){
        return "BC";
    } else if ($nilai >= 50 && $absen >= 75){
        return "C";
    } else {
        return "E";
    }
}
var_dump(hasilnilai(61,100));
// Variabel function
echo "<br>";
function awal(string $nama, $tes){
    $namaa = $tes($nama);
    echo "Halo $namaa";
}
function aku(string $nama): string {
    return "sampai $nama";
}
awal("Arfan", "strtolower");
echo "<br>";
// anonymous function 
$halo = function (string $nama){
    echo "Halo $nama";
};
$halo("arfan");
echo "<br>";
function selamatTinggal(string $nama, $filter){
    $akhir = $filter($nama);
    echo "Selamat tinggal $akhir";
}
selamatTinggal("anggi", function (string $nama): string {
    return strtoupper($nama);
});
$function = function (string $nama): string {
    return strtoupper($nama);
};
selamatTinggal("Arfan", $function);
echo "<br>";
$namaDepan ="Arfan";
$namaBelakang = "Salman";
$haloArfan = function () use ($namaDepan, $namaBelakang){
    echo "Halo $namaDepan $namaBelakang";
};
$haloArfan();
// arrow Function
$arrow = fn() => "Halo $namaDepan $namaBelakang";
echo $arrow();
// collback function 
function Arfan(string $nama, callable $filter){
    $akhir = call_user_func($filter, $nama);
    echo "Halo $akhir";
}
Arfan("arfan", "strtoupper");
echo "<br>";
Arfan("arfan", function (string $nama): string {
    return strtolower($nama);
});
echo "<br>";
echo Arfan("Arfan", fn($nama) => strtoupper($nama));
?>