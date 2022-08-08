<?php
/*variable-lenght argument list 
- merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
- variable-lenght argument list secara otomatis akan membuat argument tersebut menjadi array
  namun kita tidak perlu manual untuk mengirim array ke functionnya
- variable-lenght argument list hanya bisa dilakukan di argumentt posisi terakhir
- kita bisa menggunakan tanda ...(titik sebanyak 3 kali) sebelum nama argument
*/
function sumall(... $values) 
{
    $total=0;
    foreach($values as $value)
    {
        $total += $value;
    }
    echo "total". implode(",", $values) . " = $total";
}

sumall(1,2,3,4,5);
//implode merubah array menjadi string