<?php 
    $nilai = 80;
    $min_presensi = 12;

    if ($nilai >= 90 && $min_presensi >= 12) {
        echo "Selamat nilai anda A " . PHP_EOL;
    } else if ($nilai >= 85 && $min_presensi >= 12) {
        echo "Selamat nilai anda B " . PHP_EOL;
    } else if ($nilai >= 70 && $min_presensi >= 10) {
        echo "Anda mendapatkan nilai C " . PHP_EOL;
    } else if ($nilai >= 65 && $min_presensi >= 8) {
        echo "Anda mendapatkan nilai D " . PHP_EOL;
    } else {
        echo "Sayang sekali anda mendapatkan nilai E, anda harus mengulang " . PHP_EOL;
    }

    // Sintaks alternatif
   /*  $nilai = 80;
    $min_presensi = 12;

    if ($nilai >= 90 && $min_presensi >= 12) :
        echo "Selamat nilai anda A " . PHP_EOL;
    elseif ($nilai >= 85 && $min_presensi >= 12) : 
        echo "Selamat nilai anda B " . PHP_EOL;
    elseif ($nilai >= 70 && $min_presensi >= 10) :
        echo "Anda mendapatkan nilai C " . PHP_EOL;
    elseif ($nilai >= 65 && $min_presensi >= 8) :
        echo "Anda mendapatkan nilai D " . PHP_EOL;
    else :
        echo "Sayang sekali anda mendapatkan nilai E, anda harus mengulang " . PHP_EOL;
    endif; */
?>