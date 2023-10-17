<?php
// cek apakah tidak ada daata di $_GET

if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["hobi"]) ||
    !isset($_GET["gambar"])
) {
    // redireect
    // memaksa user untuk kembali  ke halaman utama
    header("Location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL USER</title>
</head>

<body>

    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" width="10%"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["hobi"]; ?></li>

    </ul>

    <a href="latihan1.php">kembali ke daftar user</a>



</body>

</html>