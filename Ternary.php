<?php 
    /* $gender = "PRIA";
    
    $hi = null;
    
    if ($gender === "PRIA") {
        $hi = "Hi Bro";
    } else {
        $hi = "Hi Sis";   
    }
    
    echo $hi . PHP_EOL; */
    
    // Ternary
    $gender = "WANITA";
    $hi = $gender === "PRIA" ? "hi bro" : "hi sis";
    echo $hi . PHP_EOL;
?>