<?php


//Dot Operator
//operator yang bisa kita gunakan untuk menambahkan string dengan data lain(bisa string atau tipedata lainnya)
//sebenarnya kita bisa menggunakan + untuk menambahkan string, namun jika kita coba tambahkan string
//dengan tipe data number, maka akan terjadi error oleh karena itu di rekomendasikan menggunakan .(dot)
//untuk menambahkan string atau data lain


$nama = "wahyu Aprilliandhika";
echo "Nama : " . $nama . PHP_EOL;
echo "Nilai : ". 100 . PHP_EOL;
echo "alamat : " . "Medan" . "\n";
?>

<?php
//di php untuk mengkonversi hanya menggunakan buka tutup kurung()
$valuestrng = (string)1000;
var_dump($valuestrng);

$valueint = (int)"100";
var_dump($valueint);

$valuefloat = (float)1.867;
var_dump($valuefloat);

?>

<?php
//mengakses karakter string
$nama = "Wahyu";
echo $nama[0]. PHP_EOL;
echo $nama[1]. PHP_EOL;
echo $nama[2]. PHP_EOL;
echo $nama[3]. PHP_EOL;
echo $nama[4] . PHP_EOL;

//Variabel Parsing
echo "selamat datang $nama di kota medan". PHP_EOL;

//curly brace
echo "halo {$nama}kenz di yogya" .PHP_EOL;   