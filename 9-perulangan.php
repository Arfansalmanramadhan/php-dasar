<?php
         for ($a = 10; $a >= 1; $a--):
            echo $a ,"<br>";
         endfor;
     for($j = 1; $j <= 10; $j++) {
        echo $j ,"<br>";
     }
    //  echo "<br>";
     for($b = 1; $b < 21 + 1; $b++):
        if($b % 3 == 0 && $b % 5 == 0):
            echo "FizzBuzz <br>";
        elseif($b % 3 == 0):
            echo "Fizz" ."<br>";
        elseif($b % 5 == 0):
            echo "buzz" ."<br>";
        else :
            echo $b , "<br>";
        endif;
     endfor;

    $value = 1;
    while ($value <= 10) :
        if($value % 2 == 1):
            echo "$value adalah bilangan ganjil". "<br>";
        else :
            echo "$value adalah bilangan genap". "<br>";
        endif;
        $value++;
    endwhile;

    $valuee = 1;
    do {
        echo $valuee;
        $valuee++;
    } while($valuee <= 10);
    echo "<br>";
    $nama = ["Arfan", "Salman", "Ramadhan"];
    
    for($a = 0; $a < count($nama); $a++) :
        echo "  data ke $a = $nama[$a]";
    endfor;
    echo "<br>";
    foreach ($nama as $namas){
        echo "Data $namas ";
    };
    echo "<br>";
    $Orang = [
        "namaDepan" => "Arfan",
        "namaTengah" => "Salman",
        "namaBelakang" => "Ramadhan"
    ];
    foreach ($Orang as $kunci => $hasil) {
        echo "$kunci : $hasil ";
    }
?>