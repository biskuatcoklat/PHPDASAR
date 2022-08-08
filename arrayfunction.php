<?php
/*
1. array_keys()   = mengambil semua keys milik array
2. array_values() = mengambil semua value milik array
3. array_map()    = mengubah semua data array dengan callback
4. sort()         = mengurutkan array
5. rsort()        = mengurukan array terbalik
6. shuffle()      = mengubah posisi data di array secara random
*/
$data =[1,2,3,4,5,6,7,8,9,10];
$dataresault = array_map(fn(int $value ) => $value * 10 ,$data);
var_dump($dataresault);

$bilangan = [5,6,4,3,5,1,3,9,12,10];
sort($bilangan);
var_dump($bilangan);

rsort($data);
var_dump($data);

$orang = [
    "namadepan" => "wahyu",
    "namabelakang" => "aprilliandhika"
];
var_dump(array_keys($orang));
var_dump(array_values($orang));
?>