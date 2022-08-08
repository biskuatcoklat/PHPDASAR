<?php
/* Argument/parameter 
- kita bisa mengirim informasi ke funtion yang kita panggil
- untuk melakukan halt ersebut kita perlu menambahkan argument atau parameter di function yang sudah kita buat
- cara menambahkan argument sama seperti cara membuat variabel
- Argument ditempatkan dalam kurung() di deklarasi function
- Argument bisa lebih dari satu, jika lebih dari satu , harus dipisah dengan tanda koma

*/
function ucapHallo($nama)
{
    echo "halo Mas $nama". PHP_EOL;
}

ucapHallo("Wahyu");
ucapHallo("Zaki");
?>

<?php

/*Default function argument value
- fitur ini memungkinkan jika kita mamanggil function tidak memasukkan parameter
kita bisa menettukan data defaultnya apa
*/
function apakauBilang($say = "Bodat")
{
    echo "Apa kau $say" .PHP_EOL;
}
apakauBilang("budi");
apakauBilang();
?>

<?php
/* Kesalahan default Argument Value
- default argument value bisa disimpan argument manapun
- namun jikka argument lebih dari satu, dan kita menyimpan default argumen
  value di parameter awal, maka itu kurang berguna
- jadi jika inginmenabahkan argument lebih baik menggunakan tang dibelakangnya contoh
*/
function bilang($depan, $belakang = " ")
{
    echo "ucap hai bang $depan, $belakang". PHP_EOL;
}
bilang("wahyu");
bilang("april");
bilang("zaki,sakti");
?>

<?php //type Declaration 
/* sama seperti variabel, argument di php bisa kita masukkan data yang dinamis
- kadang terlalu dinamis juga menyulitkan ,jika ternyata kita hanya ingin membuat function
  yang menggunakan argument dengan tipe data tertentu
- untungnya di php kita bisa menambahkan type datadi argument, sehingga php akan melakukan
  pengecekan ketika kitaa mengirim value ke function tersebut
- jika typr data value tidak sesuai maka akan terjadi error
- secara default php akan melakukan percobaan konversi tipedata secara otomatis,
  misal jika kita menggunakan type data int, tapi kita mengirim string maka secara otomatis
  maka akan otomatis mengkonversi string tersebut menjadi int */

  function sum(int $firstname, int $lastname)
  {
    $total = $firstname + $lastname. PHP_EOL;
    echo $total;
  }
 // sum(100,100); true karna type data nya sama
 //sum("100","100"); true walaupun type data string tapi memiliki value int didalamnya
 sum(true,false); //hasilnya satu karna kalo true value nya 1 kalo false 0 jadi 1 + 0 = 1
 //sum([],[]); error karna array ke int tidak bisa dikonversi otomatis  

?>