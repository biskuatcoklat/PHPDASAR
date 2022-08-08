<?php

//Data null adalah data yang mempresentasikan sebuah variabel tanpa nilai
//untuk membuat data NULL kita bisa menggunakan kata kunci NULL(case insensitive)

$nama = "wahyu";
$nama = null;

$umur = null;

echo "nama :";
echo $nama;
echo "\n";

echo "umur :";
echo $umur;
echo "\n";
$nama ="eko";

$nama = "wahyu";

// untuk mengecek data null kita bisa menggunakan function is_null($variabel);
echo "cek variabel:";
var_dump(is_null($nama));

//untuk menghapus variabel kita menggunakan function unset($variabel);
//$makan = "ayam";
//unset($makan);

//echo $makan;

//untuk mengecek sebuah variabel itu ada dan nilainya tidak null kita menggunakan function isset($variabel);
$minum = "air";
echo $minum;
var_dump(isset($minum));