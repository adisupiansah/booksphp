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
// echo $user["Hobi"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>

    <h1>DAFTAR USER</h1>

    <?php foreach ($user as $usr) : ?>
        <ul>
            <li>
                <img src="img/<?= $usr["gambar"]; ?>" width="15%">
            </li>
            <li>Nama :<?php echo $usr["nama"]; ?></li>
            <li>NIK :<?php echo $usr["nrp"]; ?></li>
            <li>Email :<?php echo $usr["email"]; ?></li>
            <li> Hobi :<?php echo $usr["hobi"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>