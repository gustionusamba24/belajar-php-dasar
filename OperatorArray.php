<?php 
    $first = [
        "first_name" => "Gustio"
    ];

    $last = [
        "first_name" => "Yono",
        "last_name" => "Nusamba"
    ];

    $full_name = $last + $first;
    var_dump($full_name);

    $siswa1 = [
        "nama" => "Hatmaja Narotama",
        "no" => 16,
        "kelas" => 10
    ];

    $siswa2 = [
        "nama" => "Hatmaja Narotama",
        "kelas" => 10,
        "no" => 16
    ];

    var_dump($siswa1 == $siswa2);
    var_dump($siswa1 === $siswa2);
?>