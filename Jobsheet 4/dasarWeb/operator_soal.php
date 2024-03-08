<?php
$kursiTotal = 45;
$kursiPenuh = 28;

$kursiSisa = $kursiTotal - $kursiPenuh;
$kursiSisaPersen = $kursiSisa / $kursiTotal * 100;
echo("Persentase Sisa Kursi adalah " . number_format((float)$kursiSisaPersen,1 ,'.','') . "% \n");
?>