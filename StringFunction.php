<?php 
    // Implode
    $array = ["Rizky", "Agung", "Hatma"];
    $result = implode(", ", $array);
    var_dump($result);

    // Explode
    $string = "Rizky, Agung, Hatma";
    $result = explode(", ", $string);
    var_dump($result);

    // Substring
    $string = "Rizky Fauzan Rahman";
    $result = substr($string, 0, 5);
    var_dump($result);

    // Trim 
    $string = " Rizky Fauzan Rahman ";
    $result = trim($string);
    var_dump($result);

    // strtolower
    $string = "RIZKY FAUZAN RAHMAN";
    $result = strtolower($string);
    var_dump($result);

    // strtoupper
    $string = "Rizky Fauzan Rahman";
    $result = strtoupper($string);
    var_dump($result);
?>