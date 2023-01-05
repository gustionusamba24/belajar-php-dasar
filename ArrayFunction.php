<?php 
    // Array_keys
    $array = [
        "name" => "Rizky",
        "age" => 20,
        "address" => "Jakarta"
    ];
    $result = array_keys($array);
    var_dump($result);

    // Array_values
    $result = array_values($array);
    var_dump($result);

    // Array map
    $array = [1, 2, 3, 4, 5];
    $result = array_map(fn ($value) => $value * 2, $array);
    var_dump($result);

    // Array filter
    $array = [1, 2, 3, 4, 5];
    $result = array_filter($array, fn ($value) => $value % 2 === 0);

    // Array reduce
    $array = [1, 2, 3, 4, 5];
    $result = array_reduce($array, fn ($carry, $value) => $carry + $value);
    var_dump($result);

    // Array sort 
    $array = [1, 2, 3, 4, 5];
    sort($array);
    var_dump($array);

//    Rsort
    rsort($array);
    var_dump($array);

    // Array shuffle
    shuffle($array);
    var_dump($array);
?>