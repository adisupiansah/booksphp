<?php

    $nilai = 51;

    if ($nilai > 90) {
        $grade = "A+";
    } elseif ($nilai > 80) {
        $grade = "A";
    }elseif ($nilai > 70) {
        $grade = "B+";
    }elseif ($nilai > 60) {
        $grade = "B-";
    }elseif ($nilai > 50) {
        $grade = "C+";
    }elseif ($nilai > 40) {
        $grade = "C";
    } else {
        $grade = "D";
    }

    echo "<h1>Grade Kamu Adalah : $grade</h1> <br>";
