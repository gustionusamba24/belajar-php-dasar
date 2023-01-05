<?php 
    $food = ["Nasgor", "Bakmi Goreng", "Bebek Goreng", "Tengkleng Kambing", "Tongseng"];

    foreach ($food as $key => $value) {
        echo "Makanan favorit saya ke-" . $key+1 . " adalah " . $value . PHP_EOL;
    }

    $favorite_girls = ["Ayu", "Dinda", "Rahma", "Siti", "Nurul"];
    
    foreach ($favorite_girls as $key => $value) {
        echo "Cewek favorit saya ke-" . $key+1 . " adalah " . $value . PHP_EOL;
    }

    $users = [
        [
            "id" => 1,
            "username" => "hatmaja",
            "email" => "hatmaja@gmail.com",
            "gender" => "Male",
            "age" => 15
        ], 
        [
            "id" => 2,
            "username" => "gustio",
            "email" => "gustio@gmail.com",
            "gender" => "Male",
            "age" => 22
        ]
        
    ];

    foreach ($users as $key => $value) {
        echo "User ke-" . $key+1 . " adalah " . $value["username"] . PHP_EOL;
        // echo "$key : $value" . PHP_EOL;
    }
?>