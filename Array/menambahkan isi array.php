<?php

    // membuat array
    $hobi = [
        "main Bola",
        "Ngegame", 
        "Makan"
    ];

    // menambahkan isi array pada indeks ke-3
    $hobi[3] = "Ngoding";

    // menambahkan isi array pada indeks terakhir
    $hobi[4] = "Baca Buku";

    // cetak array dengan perulangan foreach
    foreach($hobi as $hobiku){
        echo $hobiku. "<br>";
    }