<?php 
    function changeCharacter(string $word, callable $filter) {
        $wordResult = call_user_func($filter, $word);
        echo "The final result word is $wordResult" . PHP_EOL;
    }

    changeCharacter("Rizky", "strtoupper");
    changeCharacter("Rizky", "strtolower");
?>