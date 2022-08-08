<?php

/*goto operator
goto adalahfitur yang dimana kita bisa loncat ke kode program yang sesuai dengan keinginan kita
agar goto bisa loncat kita menggunakan nama label lalu diakhiri :(colon)

*/

$angka =1;

while(true)
{
    echo 'angka ke - ' . $angka;
    $angka++;
    if($angka >= 10)
    {
        goto end;
    }
}

end:
echo 'selesai';