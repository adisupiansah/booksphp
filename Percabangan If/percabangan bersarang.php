<?php

    $umur = 20;
    $menikah = true;

    if ($umur > 18) {
        if ($menikah) {
            echo "Selamat datang di dunia pernikahan";
        } else {
            echo "selamat datang pak di dunia ekonomi lagi jaatuh-jatuhnya";
        }
    } else {
        echo "UMUR KAMU TIDAK MENCUKUPI UNTUK MENGAKSES SITUS INI !!!";
    }