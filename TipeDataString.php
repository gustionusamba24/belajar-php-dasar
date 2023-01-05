<?php 
    echo "Nama      : ";
    echo "Gustio Nusamba";
    echo "\n";
    echo "Umur saya : ";
    echo "22 Tahun";
    echo "\n";
    // Heredoc
    echo <<<MULTILINE
    Saya saat ini adalah mahasiswa tingkat akhir yang sedang mengerjakan "skripsi". Doakan skripsi saya bisa selesai di bulan januari agar semuanya lancar.
    
    MULTILINE;
    
    // Nowdoc
    echo <<<'MULTILINE'
    Saya saat ini adalah mahasiswa tingkat akhir yang sedang mengerjakan "skripsi". Doakan skripsi saya bisa selesai di bulan januari agar semuanya lancar.
    MULTILINE;
?>