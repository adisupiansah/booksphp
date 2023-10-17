<!-- <?php
        // membuat array
        // caara pembuatan array versi lama
        $hari = array("senin", "selasa", "rabu");

        // pembuatan array versi baru
        $bulan = ["januari", "Februrari", "maret"];

        // pembuatan array dengan bermacam tipe data
        $arr = [19, "hari", true];

        // menampilkan array dengan versi dump dan print_r
        var_dump($bulan);

        echo "<br>";

        print_r($hari);
        echo "<br>";

        // menampilkan elemen pada array
        echo $arr[0];


        ?> -->

<!-- tag html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;

        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    // mencetak array multi dimensi
    // echo $angka[1][2];
    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
            <!-- clas cler untuk membuat kotak turun ke bawah -->
        <div class="clear"></div>
    <?php endforeach; ?>

</body>

</html>