<?php 
    // Goto
    for ($i = 0; $i < 10; $i++) {
        if ($i === 5) {
            goto end;
        }
        echo "Ini adalah perulangan ke-$i" . PHP_EOL;
    }
    
    end:
    echo "Ini adalah akhir dari perulangan" . PHP_EOL;
?>