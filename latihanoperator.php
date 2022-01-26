<?php

    //menghitung luas persegi
    $s = 4;

    //masukan rumus persegi
    $luaspersegi = ($s*$s);

    //tampilkan
    echo "Hasil hitung luas Persegi adalah sebagai berikut:<br/>";
    echo "Diketahui;<br/>";
    echo "Sisi Persegi = $s<br/>";
    echo "Maka luas Persegi sama dengan [ $s x $s ] = $luaspersegi <br/>";

//no 2
//menghitung luas lingkaran
$jari =8;
$phi  =3.14;            
// menghitung luas lingkaran
$luas_lingkaran = $phi*($jari*$jari);

echo "Hasil hitung luas lingkaran adalah sebagai berikut:<br/>";
echo "Diketahui;<br/>";
echo "Jari-jari lingkaran = $jari<br/>";
echo "Phi = $phi<br/>";
echo "Maka luas lingkaran sama dengan [ $phi x $jari x $jari ] = $luas_lingkaran";
echo "<hr>";


//no 3
    //membandingkan angka 19 dan 20
    $e = 20 ;
    $f = 19 ;
    
   //menggunakan operator relasi lebih besar
   $g = $e > $f;
   echo "$e > $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih kecil
   $g = $e < $f;
   echo "$e < $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih sama dengan
   $g = $e == $f;
   echo "$e == $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih tidak sama dengan
   $g = $e != $f;
   echo "$e != $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih besar sama dengan
   $g = $e >= $f;
   echo "$e >= $f: $g";
   echo "<hr>";

   //menggunakan operator relasi lebih kecil sama dengan
   $g = $e <= $f;
   echo "$e <= $f: $g";
   echo "<hr>";
?>
