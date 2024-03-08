<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
echo ("Hasil Tambah = {$hasilTambah}\n");
$hasilKurang = $a - $b;
echo ("Hasil Kurang = {$hasilKurang}\n");
$hasilKali = $a * $b;
echo ("Hasil Kali = {$hasilKali}\n");
$hasilBagi = $a / $b;
echo ("Hasil Bagi = {$hasilBagi}\n");
$sisaBagi = $a % $b;
echo ("Sisa Bagi = {$sisaBagi}\n");
$pangkat = $a ** $b;
echo ("Hasil Pangkat = {$pangkat} \n");
echo ("\n");

$hasilSama = $a == $b;
echo ("Hasil Sama = {$hasilSama} \n");
$hasilTidakSama = $a != $b;
echo ("Hasil Tidak Sama = {$hasilTidakSama} \n");
$hasilLebihKecil = $a < $b;
echo ("Hasil Lebih Kecil = {$hasilLebihKecil} \n");
$hasilLebihBesar = $a > $b;
echo ("Hasil Lebih Besar = {$hasilLebihBesar} \n");
$hasilLebihKecilSama = $a <= $b;
echo ("Hasil Lebih Kecil Sama = {$hasilLebihKecilSama} \n");
$hasilLebihBesarSama = $a >= $b;
echo ("Hasil Lebih Besar Sama= {$hasilLebihBesarSama} \n \n");

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo("Hasil AND = {$hasilAnd} \n");
echo("Hasil OR = {$hasilOr} \n");
echo("Hasil NOT A = {$hasilNotA} \n");
echo("Hasil NOT B = {$hasilNotB} \n");

echo("\n");

$a += $b;

echo("Hasil A-1 = {$a} \n");

$a -= $b;
echo("Hasil A-2 = {$a} \n");

$a *= $b;
echo("Hasil A-3 = {$a} \n");

$a /= $b;
echo("Hasil A-4 = {$a} \n");

$a %= $b;

echo("Hasil A-5 = {$a} \n");

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo("\n");
echo("Hasil Identik = {$hasilIdentik} \n");
echo("Hasil Tidak Identik = {$hasilTidakIdentik} \n");

?>