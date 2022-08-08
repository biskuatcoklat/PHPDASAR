<?php

$first = [
    "first_name" => "wahyu"
];

$last = [
    "last_name" => "Aprilliandhika"
];

$fullsemua = ($first + $last);
var_dump($fullsemua);

$a = [
    "nama_pertama" => "zaki",
    "nama_belakang" => "fadhil"

];

$b = [
    "nama_pertama" => "sakti",
    "nama_belakang" => "wahyu"
];

$semua = ($a != $b);
var_dump($semua);



//$a + $b  |union |menggabungkan array $a dan $b
//$a == $b |Equality | true jika $a dan $b memiliki key value yang sama
//$a === $b | identify | true jika $a dan $b memliki key value dan posisi yang sama
//$a != $b |inequality | true jika $a dan $b tidak sama
//$a <> $b |inequality | true jika $a dan $b tidak sama
//$a !== $b |nonidentify | true jika $a dan $b tidak identik