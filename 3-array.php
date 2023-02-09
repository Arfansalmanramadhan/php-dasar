<?php 
$value = array(1,2,3,4,5,6);
var_dump($value);
echo "<br>>";
$nama = ["Arfan", "Salman", "Ramadhan"];
var_dump($nama);
echo "<br>";
$nama[3] = "Azzam";
var_dump($nama);
echo "<br>";
unset($nama[3]);
var_dump($nama);
echo "<br>";
var_dump(count($nama));

$arfan = array(
    "id" => "1",
    "nama" => "Arfan Salman Ramadhan",
    "umur" => 20,
    "Kampus" => array(
        "kuliah" => "Telkom univesirty",
        "jurusan" => "D3 Teknologi Telekomunikasi",
        "kelas" => "46-03"
    )
    );
$arfann = [
    "id" => "1",
    "nama" => "Arfan Salman Ramadhan",
    "umur" => 20,
    "Kampus" => [
        "kuliah" => "Telkom univesirty",
        "jurusan" => "D3 Teknologi Telekomunikasi",
        "kelas" => "46-03"
    ]
];
var_dump($arfan);
var_dump($arfann);

?>