<?php 
    // Function
    function sayHello(string $name, int $age) {
        echo "Hello $name, you are $age years old" . PHP_EOL;
    }
    
    sayHello("Rizky", 20);
    sayHello("Agung", 22);
    sayHello("Hatma", 15);
    sayHello("Rizky", "20");
    sayHello("Rizky", true);
    // sayHello("Rizky", true);
    // sayHello("Rizky", 20.5);
    // sayHello("Rizky", [20, 30, 40]);
    // sayHello("Rizky", null);
    // sayHello("Rizky", new stdClass());
    
    function sum(int $first, int $last): int {
        $total = $first + $last;
        return $total;
    }
    
    $result = sum(100, 100);
    var_dump($result);
    
    function sumAll(array $values): int {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }
        return $total;
    }
    
    $result = sumAll([1, 2, 3, 4, 5]);
    var_dump($result);
    
    function sayHelloToAll(string ...$names) {
        foreach ($names as $name) {
            echo "Hello $name" . PHP_EOL;
        }
    }
    
    sayHelloToAll("Rizky", "Fauzan", "Rahman");
?>