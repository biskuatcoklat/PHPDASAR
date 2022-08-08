<?php

/* while loop
hanya terdapat kondisi perulanagan tanpa ada init statement dan post statement
*/

$counter = 1;
while($counter <=10)
{
    echo 'halo ini di while ke -' . $counter .PHP_EOL;
    $counter++;
}
?>
<?php
//versi simpel
$counter = 10;
while($counter >=1):

    echo 'halo ini di while ke -' . $counter. PHP_EOL;
    $counter--;
endwhile;
?>