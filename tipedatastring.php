<?php
echo "nama :";
echo "wahyu aprilliandhika";
echo "\n";

?>
<?php
echo <<<wahyu
ini adalah cara menggunakan Heredoc, Heredoc adalah fiur yang digunakan untuk string
tanpa harus mengetik panjang 
wahyu;
?>

<?php
echo<<<'wahyu'
ini adalah cara menggunak Newdoc, yang membedakannya dengan Heredoc adalah dia tidak memiliki
kemampuan parsing seperti di Heredoc atau double quote
wahyu;
?>
