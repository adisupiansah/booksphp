<?php

function intro($salam, $nama)
{
    echo $salam . ",";
    echo "perkenalkan nama saya" . $nama . "<br>";
    echo "senang berkenalan dengan anda <br>";
}

// memanggil function yang sudah di buat
intro("Assalamualaikum", "Adi supiyansah");

echo "<hr>";

$saya = "Nurul Safika";
$ucapanSalam = "Selamat pagi";

// memanggilnya lagi
intro($ucapanSalam, $saya);
