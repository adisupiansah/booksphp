<?php
// Array Associative
// definisinya sama seperti array Numerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$user = [
    [
        "nama" => "Adi supiansyah",
        "nrp" => "03011597",
        "email" => "adisupiansah15@gmail.com",
        "hobi" => "Mengoding",
        "gambar" => "adi.png"
    ],
    [
        "nama" => "DOddy mulyanto",
        "nrp" => "11024577",
        "email" => "doddymulyanto.com",
        "hobi" => "membaca buku",
        "gambar" => "nurul.jpg"
    ]
];
// pemanggilan array Associative
echo $user["Hobi"];


?>


