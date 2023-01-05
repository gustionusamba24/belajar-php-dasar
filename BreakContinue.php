<?php 
    // Break
    for ($i = 0; $i < 10; $i++) {
        if ($i === 5) {
            break;
        }
        echo "Ini adalah perulangan ke-$i" . PHP_EOL;
    }
    
    echo "==============================" . PHP_EOL;
    
    // Continue
    for ($j = 0; $j < 10; $j++) {
        if ($j % 2 === 1) {
            continue;
        }
        echo "Ini adalah perulangan ke-$j" . PHP_EOL;
    }
?>