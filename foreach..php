<?php
/*
$namas = ["wahyu" , "aprilliandhika", "zaki"];

foreach ($namas as $nama)
{
    echo  "Data ke $nama";
}

?>

<?php
*/
$biodata = [
    "nama_depan" => "Wahyu",
    "nama_tengah" => "april",
    "nama_belakang" => "andhika"
];

foreach($biodata as $key => $value)
{
    echo "$key : $value";
}