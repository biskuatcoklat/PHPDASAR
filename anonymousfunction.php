<?php
/*Anonymous function
- adalah funtion tanpa nama, di php di sebut closure
- biaanya digunakan sebagai argument atau sebagai value di variable'
- kita bisa mengirim function sebagai argument di function lainnya
*/
$sayhai= function (string $nama)
{
    echo "hai $nama". PHP_EOL;
};

$sayhai("wahyu");
?>

<?php

function saybye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good bye $name". PHP_EOL;
}

saybye("boy", function (string $name) : string
{
    return strtoupper($name);
});

$filterfunction = function (string $name) : string
{
    return strtolower($name);
};
saybye("gess",$filterfunction);
?>

<?php

$namadepan = "wahyu";
$namabelakang = "apriliandhika";

$ucapkan = function () use ($namadepan,$namabelakang) 
{
    echo "hai $namadepan $namabelakang welcome to medan" .PHP_EOL;
};

echo $ucapkan();