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
?>