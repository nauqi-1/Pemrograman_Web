<?php

function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}




function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya $nama <br/>";

    echo "Umur saya adalah " . hitungUmur(2003, 2023) . " tahun<br/>";

    echo "Senang berkenalan dengan Anda <br/>";
}

perkenalan("Syauqi");


?>