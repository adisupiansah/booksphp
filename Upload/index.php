<?php

require 'functions.php';

// note : untuk sintax ORDER BY id DESC itu adalah untuk menampilkan mahasiswa yang terbaru / yang baru input
// sedangkan sintax ASC adlaah mahasiswa yang berhasil input data, akan tampil di data paling bawah

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

// jika tombol cari di klik, maka kita akan timpa $mahasiswa dengan data mahasiswa sesuai pencariannya
if( isset($_POST["cari"]) ) {

    $mahasiswa = cari($_POST["keyword"]);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<br>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br></br>

    <form action="" method="post">

    <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian data mahasiswa" autocomplete="off">
    <button type="submit" name="cari">Cari data</button>

    <br></br>



    </form>



    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"];  ?>" onclick="return confirm('Yakin?');">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="70px"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>

            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>