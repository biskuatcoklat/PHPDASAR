<?php
/*function return value
- secara default , function itu tidak menghasilkan value apapun, namun jika kita ingin
  kita bisa membuat sebuah function mengembalikkan nilai
- dan dildalam block function, untuk menhasilkan nilai tersebut, kita harus menggunakan
  kunci kata return, lalu diikuti dengan data yang dihasilkan
- kita hanya bisa menghasilkan 1 data di sebuah function, tidak lebih dari satu
*/
function sum(int $first ,int $last)
{
    $total = $first + $last;
    return $total;
}

$hasil = sum(10,10);
var_dump($hasil);
?>

<?php

function getfinalniali(int $value)
{
    if($value >= 90)
    {
        return "A";
    }
    else if($value >= 80)
    {
        return "B";
    }
    else if($value >= 60)
    {
        return "C";
    }
    else if($value >= 50)
    {
        return "D";
    }
    else
    {
        return "E";
    }
}

$score = getfinalniali(90);
var_dump($score);
?>

<?php
/*return type data value
- sama seperti pada argument , pada return value pun kita bisa mendeklarasikan tipe datanya
- hal ini mempermudah kita dalam membaca tipe data kembalian function, kita bisa juga digunakan 
  untuk menjaga agar jangan sampai kita mengembalikan tipe data yang salah di function
- untuk mendeklarasikan tipe data kembalian function, setelah kurung() kita bisa menamabahkan :
  diikuti tipe data kembaliannya.
  */
function tambah(int $pertama ,int $terakhir) : int
{
    $all = $pertama + $terakhir;
    return $all;
}

$hasilnya = sum(10,10);
var_dump($hasilnya);

function getfinalnilai(int $nilai) : string
{
    if($nilai >= 90)
    {
        return "A";
    }
    else if($nilai >= 80)
    {
        return "B";
    }
    else if($nilai >= 60)
    {
        return "C";
    }
    else if($nilai >= 50)
    {
        return "D";
    }
    else
    {
        return "E";
    }
}

$ip = getfinalnilai(90);
var_dump($ip);
?>