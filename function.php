<?php

function aurevoir()
{
    echo 'A dio Benji';
}

// aurevoir();

// $input = 10;

// switch ($input) {
//     case 1:
//         echo 'Un';
//         break;
//     case 2:
//         echo 'Deux';
//         break;
//     case 3:
//         echo 'Trois';
//         break;
//     case 4:
//         echo 'Quatre';
//         break;
//     case 5:
//         echo 'Cinq';
//         break;
//     case 6:
//         echo 'Six';
//         break;
//     case 7:
//         echo 'Sept';
//         break;
//     case 8:
//         echo 'Huit';
//         break;
//     case 9:
//         echo 'Neuf';
//         break;
//     case 10:
//         echo 'Dix';
//         break;
//     default:
//         echo "Desole mon frere";
//         break;
// }


$tbls = [
    1=>'un',
    2=>'deux',
    3=>'trois',
    4=>'quatre',
    5=>'cinq',
];
$val = 5;
foreach ($tbls as $key => $value) {
    if ($key == $val) {
        echo $value;
    }
}