<?php


    // membuat array
    $komputer = ["motherboard", "hardisk", "ram"];

    // menampilkan isi array dengan perulangan foreach
    foreach($komputer as $k){
        echo $k. "<br>";
    }

    echo "<hr>";

    $hard = 0;
    while($hard < count($komputer)){
        echo $komputer[$hard]. "<br>";
        $hard++;
    }