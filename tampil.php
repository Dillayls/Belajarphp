<?php 

// menangkap data nama dengan method get
$nama = $_GET['nama'];
// menangkap data sekolah dengan method get
$sklh = $_GET['sklh'];
// menangkap data kelamin dengan method get
$jk = $_GET['jk'];
// menangkap data no. telpon dengan method get
$no = $_GET['no'];

echo "Selamat <b> $nama </b>, Pendaftaran Berhasil!";

echo "<br/>";

echo "Biodata Anda";

echo "<hr/>";


// menampilkan data nama
echo "Nama: " . $nama;
echo "<br/>";

// menampilkan data JK
echo " Jenis Kelamin: " . $jk;
echo "<br/>";

// menampilkan data SEKOLAH
echo " Asal SMP: " . $sklh;
echo "<br/>";

// menampilkan data SEKOLAH
echo "No. Telp: " . $no;
echo "<br/>";


?>