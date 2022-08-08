<?php
/*Arrow Function
- secara garis besar ini merupakan dua hal yang sama
- hal yang membedakan adalah , secara otomatis variable di luar closure bisa digunakan
  tidak seperti anonymous yang harus disebutkan secara manual menggunakan kata kunci use
- pembuatan arrow function tidak menggunakan kata kunci function melainkan fn
- arrow function dibuat secara sederhana
*/
$firstname ="wahyu";
$lastname = "andhika";

$sayto =fn() => "halo $firstname $lastname";

echo $sayto();
?>