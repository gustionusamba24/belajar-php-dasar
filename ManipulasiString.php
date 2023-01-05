<?php 
    $name = "Gustio Nusamba";
    $address = "Yogyakarta";
    echo "Nama saya adalah " . $name . PHP_EOL;
    echo "Alamat saya di " . $address . PHP_EOL;
    echo "Nilai saya adalah " . 100 . PHP_EOL; 

    // Konversi Nilai
    $string_ke_integer = (int)"100";
    var_dump($string_ke_integer);
    $integer_ke_string = (string)100;
    var_dump($integer_ke_string);
    $integer_ke_float = (float)"0.0005";
    var_dump($integer_ke_float);

    $apple = 5;
    $durian = 10;
    $melon = 50;
    $total = 0;
    $total += $apple;
    $total += $durian;
    $total += $melon;

    echo "Harga apel per-kilo adalah $$apple, harga durian per-kilo $$durian, dan harga melon per-kilo adalah $$melon. Jadi total semuanya adalah $$total";
?>