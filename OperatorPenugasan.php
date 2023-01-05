<?php 
    $total = 0;

    $nasgor = 15000;
    $es_teh = 4000;
    $gorengan = 5000;

    $total += $nasgor;
    $total += $es_teh;
    $total += $gorengan;

    echo <<<TOTAL
    Harga
    Nasi goreng : $nasgor,
    Es teh      : $es_teh,
    Gorengan    : $gorengan
    Totalnya adalah : $total
    TOTAL
?>