<?php 
    $user = [
        "id" => 1,
        "username" => "hatmaja007",
        "role" => "user",
        "password" => "hatmaja_ganteng2480"
    ]; 

    $username = $user["username"] ?? "Data kosong";
    echo $username . PHP_EOL;
?>