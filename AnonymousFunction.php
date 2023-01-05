<?php 
    $sayHello = function (string $name) {
        echo "Hello $name" . PHP_EOL;
    };

    $sayHello("Rizky");
    $sayHello("Agung"); 

    $keliling_persegi = function (int $sisi) {
        return $sisi * 4;
    };

    $keliling_persegi_panjang = function (int $panjang, int $lebar) {
        return 2 * ($panjang + $lebar);
    };

    var_dump($keliling_persegi(10));
    var_dump($keliling_persegi_panjang(10, 5));

    $firtName = "Rizky";
    $lastName = "Fauzan";

    $fullName = function () use ($firtName, $lastName) {
        return "$firtName $lastName";
    };

    var_dump($fullName());
?>