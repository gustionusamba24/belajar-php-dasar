<?php 
    function sayHello(string $name = "Rizky", int $age = 20) {
        echo "Hello $name, you are $age years old" . PHP_EOL;
    }
    
    sayHello();
    sayHello("Agung");
    sayHello("Hatma", 15);
?>