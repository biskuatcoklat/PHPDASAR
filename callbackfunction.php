<?php
/* 
- adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan diberikan argument
  di php ada cara lain memiplemnetasikan callback yaitu, menggunakan tipedata callable
- untuk memanggil callback funtion, kita mengguakan function call_user_func(callable,arguments)
*/
function saybye(string $nama, callable $filter)
{
    $finalname = call_user_func($filter,$nama);
    echo "hello $finalname" .PHP_EOL;
}

saybye("wahyu", "strtoupper");
saybye("zaki", "strtolower");
saybye("wahyu", function (string $nama ): string
{
    return strtoupper($nama);
});
saybye("wahyu", fn($nama) => strtoupper($nama));