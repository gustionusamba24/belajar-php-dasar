<?php 
    function luasSegitiga(float $alas, float $tinggi): float {
        $luas = ($alas * $tinggi) / 2;
        return $luas;
    }

    $hasil_luas = luasSegitiga(10, 5);
    echo "Luas segitiga adalah $hasil_luas" . PHP_EOL;

    function foo() {
        echo "Ini adalah fungsi foo" . PHP_EOL;
    }

    function bar() {
        echo "Ini adalah fungsi bar" . PHP_EOL;
    }

    $functionName = "foo";
    $functionName();
    
    $functionName = "bar";
    $functionName();

    function sayHello(string $name, $filter) {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Samba", "strtoupper");
    sayHello("Samba", "strtolower");
?>