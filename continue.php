<?php

for($counter = 1; $counter <= 100; $counter++):
    if($counter % 2 == 1):
        continue;
    endif;
    echo "continue berlanjut" .$counter;
endfor;

?>

<?php //bilangan genap

for($bil = 1; $bil <= 10; $bil++)
{
    if($bil % 2 == 1)
    {
         continue;
    }
    echo 'bilangan genap -'. $bil;
}
?>