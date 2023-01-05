<?php 
    function sum(int $first, int $last): int {
        $total = $first + $last;
        return $total;
    }

    $result = sum(100, 100);
    var_dump($result);
?>