<?php

//Studi Kasus 1
$baju = false;

if($baju){
	echo "Variable baju bernilai false"; 
}

//jika menggunakan false maka hasilnya tidak akan muncul

echo "<hr>";

//Studi Kasus 2
$nilai = 76;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 90 and $nilai <= 100) {
  echo "Peringkat: A";
} elseif ($nilai >= 80) {
  echo "Peringkat: B";
} elseif ($nilai >= 70) {
  echo "Peringkat: C";
} elseif ($nilai >=20 ) {
  echo "Peringkat: D"; }

?>