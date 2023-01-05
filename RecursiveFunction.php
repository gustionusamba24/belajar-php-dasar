<?php 
    function factorial(int $value): int {
        if ($value === 1) {
            return 1;
        } else {
            return $value * factorial($value - 1);
        }
    }
    
    $result = factorial(5);
    var_dump($result);


    // Using looping
    function factorialLoop(int $nilai): int {
        $total = 1;
        for ($i = 1; $i <= $nilai; $i++) {
            $total *= $i;
        }
        return $total;
    }

    $result = factorialLoop(5);
    var_dump($result);
    
?>