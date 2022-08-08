<?php
/*
1. join() / implode() = menggabungkan array menjadi string
2. explode ()         = memecah string menjadi array
3. strtolower()       = mengubah string menjadi lowercase
4. strtoupper()       = mengubah string menjadi uppercase
5. substr()           = mengambil sebagian string
6, trim()             = menghapus whitespace didepan dan dibelakang string
*/
var_dump(join(",", [1,2,3,4,5]));
var_dump(explode(" ", "Wahyu Aprilliandhika"));
var_dump(strtolower("WAHYU APRILLIANDHIKA"));
var_dump(strtoupper("wahyu aprilliandhika"));
var_dump(substr("wahyu aprilliandhika" ,0,3));
var_dump(trim("         wahyu           "));
?>