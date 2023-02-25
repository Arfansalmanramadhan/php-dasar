<?php
    $nilai = 51;
    $absen = 70;
    

    if($nilai >= 80 && $absen >= 75 ){
        echo "Nilai anda A";
    } elseif ($nilai >=70 && $absen >= 75) {
        echo "NIlai anda AB";
    } elseif ($nilai >=65 && $absen >= 75) {
        echo "NIlai anda B";
    } elseif ($nilai >=60 && $absen >= 75) {
        echo "Nilai anda BC";
    } elseif ($nilai >=50 && $absen >= 75) {
        echo "Nilai anda C";
    } else {
        echo "Nilai anda E";
    }
    if($nilai >= 80 && $absen >= 75 ):
        echo "Nilai anda A";
     elseif ($nilai >=70 && $absen >= 75) :
        echo "NIlai anda AB";
     elseif ($nilai >=65 && $absen >= 75) :
        echo "NIlai anda B";
     elseif ($nilai >=60 && $absen >= 75) :
        echo "Nilai anda BC";
     elseif ($nilai >=50 && $absen >= 75) :
        echo "Nilai anda C";
     else :
        echo "Nilai anda E";
     endif;

    echo "<br>";
    $Hasil = "B";
    switch ($Hasil){
        case "A":
            echo "Anda lulus dengan sangat bagus";
            break;
        case "B";
            echo "Anda lulus dengan baik";
            break;
        case "C";
            echo "Anda cukup";
        default:
            echo "Anda tidak lulus";
    }
?>