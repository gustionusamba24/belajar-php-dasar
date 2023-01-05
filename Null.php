<?php
    
    $name = "Gustio Nusamba";
    echo "Is name Null?: ";
    echo is_null($name);
    echo "\n";
    var_dump(is_null($name));

    echo "\n";
    $isEaten = false;
    unset($is_eaten);
    echo $is_eaten;

    $isDrunk = false;
    var_dump(isset($isDrunk));
?>