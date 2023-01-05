<?php 
    $sayHello = fn (string $name) => "Hello $name";
    echo $sayHello("Rizky") . PHP_EOL;
    echo $sayHello("Agung") . PHP_EOL;
    
    $keliling_persegi = fn (int $sisi) => $sisi * 4;
    $keliling_persegi_panjang = fn (int $panjang, int $lebar) => 2 * ($panjang + $lebar);
    
    var_dump($keliling_persegi(10));
    var_dump($keliling_persegi_panjang(10, 5));
    
    $firtName = "Rizky";
    $lastName = "Fauzan";
    
    $fullName = fn () => "$firtName $lastName";
    
    var_dump($fullName());
?>