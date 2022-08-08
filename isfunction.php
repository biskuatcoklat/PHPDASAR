<?php
/*
- function - function ini digunakan untuk mengecek tipedata dari sebuah data
1. is_string() = untuk mengecek apakai tipedata string
2. is_bool()   = untuk mengecek apakah tipedata boolean
3. is_int()    = untuk mengecek apakah tipedata number integer
4. is_float()  = untuk mengecek apakah tipedata number floating point
5. is_array()  = untuk mengecek apakah tipedata array
6. is_callable = untuk mengecek apakah tipedata callable
*/
$data = "100";
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_string($data));
var_dump(is_array($data));
var_dump(is_bool($data));
var_dump(is_callable($data));
?>