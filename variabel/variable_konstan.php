<?php
//definisikan konstanta
define ('PHI', 3.14);
define ('DBNAME', 'db_mahasiswa');
define ('DBSERVER', 'localhost');
define ('DBUSER','ROOT');
define ('DBPASS','Much21200ti');

//deklarasi variable
$jari = 10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

//menampilkan hhasil (print)
echo 'Luas Lingkaran :'. $luas.'<br>';
echo 'Keliling Lingkaran :'. $keliling;

echo'<hr>';

//menampilkan konstanta
echo 'Nama database :'.DBNAME. '<br>';
echo 'Server database :'.DBSERVER. '<br>';
echo 'DBUSER :'.DBUSER. '<br>';
echo 'DBPASS :'.DBPASS. '<br>';

?>