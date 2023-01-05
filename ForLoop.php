<?php 
    $food = ["Nasgor", "Bakmi Goreng", "Bebek Goreng", "Tengkleng Kambing", "Tongseng"];
    for ($i = 0; $i < count($food); $i++) {
        echo "Makanan favorit saya ke-" . $i+1 . " adalah " . $food[$i] . PHP_EOL;
    }

    echo "==============================" . PHP_EOL;

    for ($j = 0; $j <= 3; $j++) {
        for ($k = 0; $k <= 5; $k++) {
            echo "Ini adalah perulangan ke ($j, $k)" . PHP_EOL;
        }
    }
?>