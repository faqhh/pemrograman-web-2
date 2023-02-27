<?php
//  definisikan variable konstanta
define ('PHI', 3.14 );

// soal 1 hitung luas lingkarangn dengan jari2
// soal 2 hitung keliling nya

// definisikan nilai jari2
$jari = 8;
// definisikan nilai luas
$luas = PHI * $jari * $jari;
// hitung nilai keliling
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dengan jari jari ' .$jari. '=' .$luas;
echo '<br/> keliling nya : ' .$kll;

?>