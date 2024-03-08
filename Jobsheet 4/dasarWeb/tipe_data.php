<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d + $c;

echo "Variabel a: {$a} \n";
echo "Variabel b: {$b} \n";
echo "Variabel c: {$c} \n";
echo "Variabel d: {$d} \n";
echo "Variabel e: {$e} \n";

var_dump($e);

echo "\n";

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3 . "\n";

echo "Matematika: {$nilaiMatematika} \n";
echo "IPA: {$nilaiIPA} \n";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} \n";
echo "Rata - rata: {$rataRata} \n";

var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "\n";
var_dump($apakahSiswaSudahUjian);

$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} \n";
echo "Nama Belakang : {$namaBelakang} \n";

echo $namaLengkap . "\n";

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0] . "\n";
?>