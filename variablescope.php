<?php
/*
------------------------------------------------------------------------- 
- Variable scope                                                        -
- scope variable adalah dibagian mana saja sebuah variable bisa diakses -
- PHP memiliki 3 jenis variable scope                                   -
- 1. global                                                             -
- 2. local                                                              -
- 3. static                                                             -
-------------------------------------------------------------------------
*/
/*
1. Global Scope
variable yang dibuat diluar function memilikiscope global
variable di scope global hanya bisa diakses dari luar function

$nama = "wahyu"; //global scope karena diluar function
function sayhai()
{
    echo $nama . PHP_EOL; //error
}
sayhai();
*/

/*
2. local scope
variable yang dibuat didalam function memiliki scope local
variable di scope local hanya bisa diakses di dalam funtion itu sendiri
artinya variable tersebut tidak bisa diakses dari luar function atau funtion yg lain

function namaku() //local scope karena variable bisa diakses di dalam function itu sendiri
{
    $namasaya ="wahyu";
}
namaku();
echo namaku(); //error
*/

/*
Global keyword
- jika kita ingin mengakses variable diluar function(global scope) dari dalam function,
  kita bisa menggunakan kata kunci global
- dengan menggunakan kata kunci global kita bisa mengakses varible yang ada di global scope
  dari dalam function
*/
$name = "wahyu"; //global scope

function sayhalo()
{
    global $name; //global keyword
    echo $name . PHP_EOL;
}
sayhalo();

/*
$GLOBAL variable
variable yang bersifat superglobal,artinya bisa diakses dari scope manapun
*/
$nama = "zaki"; //global scope

function sayhai()
{
    global $nama;
    //echo $nama .PHP_EOL;
    echo "hello {$GLOBALS ["nama"]}" . PHP_EOL;
}
sayhai();

/*
static scope 

*/
function increment()
{
    static $counter = 1;
    echo "keberapa $counter" .PHP_EOL;
    $counter++;
}
increment();
increment();
increment();
increment();
increment();
increment();
?>