<?php
$user = [
    [
        "nama" => "Adi supiansyah",
        "nrp" => "03011597",
        "email" => "adisupiansah15@gmail.com",
        "hobi" => "Mengoding",
        "gambar" => "adi.png"
    ],
    [
        "nama" => "Nurul safika",
        "nrp" => "11024577",
        "email" => "nurulsafika@gmail.com",
        "hobi" => "memasak",
        "gambar" => "nurul.jpg"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>DAFAR USER</h1>

    <ul>

        <?php foreach ($user as $usr) : ?>
           <li>
            <a href="latihan2.php?nama=<?= $usr["nama"]; ?> &nrp=<?= $usr["nrp"]; ?>&email=<?= $usr["email"]; ?>&hobi=<?= $usr["hobi"]; ?>&gambar=<?= $usr["gambar"]; ?>"><?= $usr["nama"]; ?></a>
           </li>

        <?php endforeach; ?>

    </ul>

</body>

</html>