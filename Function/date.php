<?php

    // membuat function date
    //  echo date("l, d-M_Y");
    //  "l" : format hari
    //  "d" : format tanggal
    //  "M" : format bulan
    //  "Y" : format tahun


    // membuat function waktu
    // echo date("l", time() + 60*60*24*5);

    // membuat function mktime
    // mktime(0,0,0,0,0,0)
    // jam,menit,detik,bulan,tanggal,tahun

    echo date ("l",  mktime(14,40,0, 2,21,2023));