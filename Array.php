<?php 
    $numeric = array(3, 90, 77, 6, 3.14);
    var_dump($numeric);
    $comma_separated = implode(", ", $numeric);
    echo $comma_separated;
    
    $names = ["Gustio", "Nusamba", "Herlambang", "Hatmaja"];
    var_dump($names);
    $comma_separated = implode(", ", $names);
    echo $comma_separated;

    echo "\n";
    echo $names[1];
    $names[1] = "Agus";
    echo "\n";
    echo $names[1];
    $names[] = "Mutia";
    echo "\n";
    echo $names[4];
    echo "\n";
    echo count($names);
    unset($names[3]);
    echo "\n";
    $comma_separated = implode(", ", $names);
    echo $comma_separated;
    var_dump($names);

    // Array sebagai Map
    $siswa = array(
        "id" => "19.11.3179",
        "name" => "Hatmaja Narotama",
        "age" => 14,
        "address" => [
            "city" => "Sleman",
            "Province" => "DIY"
        ]
    );

    $pegawai = [
        "nip" => "4123",
        "name" => "Jason Pratama",
        "age" => 30, 
    ];

    var_dump($siswa);
    var_dump($pegawai);
    var_dump($pegawai["name"]);
    var_dump($siswa["id"]);
    var_dump($siswa["address"]["city"]);
?>