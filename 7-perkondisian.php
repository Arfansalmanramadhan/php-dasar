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

    
?>