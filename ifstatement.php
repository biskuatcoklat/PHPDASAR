<?php

$nilai = 90;
$absen = 90;

if($nilai >= 90 && $absen >=90)
{
    echo 'selamat anda dapat nilai A';
}
else if($nilai >= 80 && $absen >=80)
{
    echo 'selamat amnda dapet nilai B';
}
else if($nilai >= 60 && $absen >=60)
{
    echo 'selamat amnda dapet nilai C';
}
else if($nilai >= 50 && $absen >=50)
{
    echo 'selamat amnda dapet nilai D';
}
else{
    echo 'remed';
}
?>



<?php //cara 2

$nilai = 90;
$absen = 90;

if($nilai >= 90 && $absen >=90):

    echo 'selamat anda dapat nilai A';

elseif($nilai >= 80 && $absen >=80):

    echo 'selamat amnda dapet nilai B';

elseif($nilai >= 60 && $absen >=60):

    echo 'selamat amnda dapet nilai C';

elseif($nilai >= 50 && $absen >=50):

    echo 'selamat amnda dapet nilai D';

else:
    echo 'remed';
endif;

?>