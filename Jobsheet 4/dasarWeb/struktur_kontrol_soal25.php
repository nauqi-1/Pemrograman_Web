<?php
$skor = [300, 600, 450, 700];

$totalSkor = 0;
foreach ($skor as $nilai) {
    $totalSkor += $nilai;
}

echo "Total skor pemain adalah: $totalSkor \n";
echo "Apakah pemain mendapatkan hadiah tambahan? ";

$hasil = ($totalSkor > 500)? "YA" : "TIDAK";
echo $hasil;
echo "\n"; 
?>