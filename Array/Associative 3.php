<?php


// contoh ke-2 Array Associative
// pada materi ini saya menggunakan Array Associative dan Array Numerik
$user = [
    [
        "nama" => "Adi supiansyah",
        "nrp" => "03011597",
        "email" => "adisupiansah15@gmail.com",
        "Hobi" => "Mengoding"
    ],
    [
        "nama" => "DOddy mulyanto",
        "nrp" => "11024577",
        "email" => "doddymulyanto.com",
        "Hobi" => "membaca buku",
        "Nilai" => [90, 80, 75]
    ]
];

echo $user[1]["Nilai"][1];

?>