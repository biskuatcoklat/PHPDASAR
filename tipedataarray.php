<?php

$nilai = array(1,2,3,4,4.5);
var_dump($nilai);
echo "\n";

$grup =["wahyu", "aprilliandhika","s.kom",1,2,3,4,5];
var_dump($grup);
echo "\n";

//$array[index]          mengakses data di array pada nomor index
//$array[index]= value   menggubah data array menggunakan nomor indeks dengan value baru
//$array[]=value         menambah data di array pada posisi paling belakang
//unset($array[index])   menghapus data di array, otomatis hilang dari array
//count($array)          mengambil total data di array

//Membuat map
$ikan = array(
    "id" => "wahyu",
    "name" => "wahyu aprilliandhika",
    "age" => "19"
);
var_dump($ikan);

//array dalam array
$sapi =[
    "id" =>"makan",
    "name" => "minum",
    "jarak"=>  [
        "lokasi"=>"medan",
        "howlong"=>"2jam"
    ]
];
var_dump($sapi["jarak"]["lokasi"]);

//array dalam array
