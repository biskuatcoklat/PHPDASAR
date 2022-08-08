<?php

$nilai = "A";

switch($nilai)
{
    case "A":
        echo 'anda lulus sangat baik';
        break;
    case "B":
    case "C":
        echo 'anda lulus';
        break;
    case "D":
        echo 'anda tidak lulus';
        break;
    default:
        echo 'mending kau pulang aja';
        break;

}
?>

<?php

//syntax alternatif
//switch statement juga bisa tidak menggunakan kurung kurawal{}
//namun diakhir switch statement kita menggunakan endswitch

switch($nilai):
    case "A":
        echo 'anda lulus sangat baik';
        break;
    case "B":
    case "C":
        echo 'anda lulus';
        break;
    case "D":
        echo 'anda tidak lulus';
        break;
    default:
        echo 'mending kau pulang aja';

endswitch;

?>