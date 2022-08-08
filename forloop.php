<?php

/*
for(init inisialisai;)kondisi;post statement)
{
    //block perulangan
}
- init statement akan dieksekusi hanya sekali di awal sebelum perulangan
- kondisi akan dilakukan di setiap perulanagan,jika true perulanagan akan dilanjutkan
  jika false perulangan akan dihentikan
- post statement akan dieksekusi setiap kali akhir perulanagan
- init statement . kondisi dan statement tidak wajib diisi, jika kondisi tidak disisi berarti
  selalu bernilai true
*/
/*perulangan tanpa limit
for(; ;)
{
    echo 'halo guys';
}
*/

for( $counter = 1; $counter <= 10 ; $counter++ )
{
    echo'halo guys ke - '. $counter. PHP_EOL; 
}



//syntax alternative forloop
for( $counter = 10; $counter >= 1 ; $counter-- ):

    echo'halo guys ke - '. $counter .PHP_EOL; 
endfor;
?>