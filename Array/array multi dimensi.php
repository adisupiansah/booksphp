<?php
// membuar 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & Mysql untuk pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Tutorial PHP dari nol hinnga mahir",
        "penulis" => "petanikode",
    ],
    [
        "judul" => "Membuat aplikasi web menggunakan PHP",
        "penulis" => "petanikode",
    ]
];

//menampilkan array 

foreach ($artikel as $art) {
    echo "<h2>" . $art["judul"] . "</h2>";
    echo "<p>" . $art["penulis"] . "</p>";
    echo "<hr>";
}
