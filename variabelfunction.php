<?php
/*variable function
- adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
- untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(),
  jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(Argument)
*/
function sayhai(string $name, $filter)
{
    $firstname = $filter($name);
    echo "hai $firstname". PHP_EOL;
}

function sample(string $name) : string
{
    return "sample $name";
}

sayhai("wahyu", "sample");
sayhai("zaki", "strtoupper");
sayhai("sakti", "strtolower");
