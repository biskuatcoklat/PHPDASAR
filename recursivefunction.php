<?php
/*
- kemampuan function memanggil dirinya sendiri
-kadang ada memang banyak problem, yang lebih mudah menggunakan recursive function, contohnya factorial
*/
function factorialrecursive (int $value) : int
{
    if($value ==1)
    {
        return 1;
    }
    else
    {
        return $value * factorialrecursive($value -1);
    }
}
var_dump(factorialrecursive(5));