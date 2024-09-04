<?php

function luasLingkaran($jari) : float {
    $luas = M_PI * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * M_PI * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $bola = (4/3) * M_PI * $jari * $jari * $jari;
    return $bola;
}

function volumeTabung($jari, $tinggi) : float {
    $tabung = M_PI * $jari * $jari * $tinggi;
    return $tabung;
}

function volumeKerucut($jari, $tinggi) : float {
    $kerucut = (1/3) * M_PI * $jari * $jari * $tinggi;
    return $kerucut;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}\n";

$keliling_lingkaran = kelilingLingkaran(45);
echo "Keliling tanah budi adalah {$keliling_lingkaran}\n";

$volume_bola = volumeBola(45);
echo "Volume bola adalah {$volume_bola}\n";

$volume_tabung = volumeTabung(45, 20);
echo "Volume tabung adalah {$volume_tabung}\n";

$volume_kerucut = volumeKerucut(45, 20);
echo "Volume kerucut adalah {$volume_kerucut}\n";

?>