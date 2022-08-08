<?php
/*
Reference mengakses variable yang sama dengan nama variable yang berbeda
Reference di php tidak sama dengan c++ yaitu fitur pointer
Saat kita mengubah isi value dari reference , maka secara otomatis value variable aslinya berubah
untuk membuat reference terhadap variable, kita bisa menggunakan karakter &
*/
$name = "wahyu";

$namalain = &$name;
$namalain = "zaki";

echo $namalain .PHP_EOL;

function increment(int &$value)
{
    $value++;
}
$counter = 1;
increment($counter);
echo $counter .PHP_EOL;

/* returning reference
mengembalikan reference pada function
namun hati hati, gunakan fitur ini jika memang ada alasannya , karna fitur ini agak menbingungkan
*/

function &getvalue()
{
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;
$b = &getvalue();
echo $b;
?>