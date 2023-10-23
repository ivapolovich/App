<?php
/*
$a = 50;
$b = 10;
$c = 15;

if (($a <= $b && $b <= $c) || $a >= $b && $b >= $c) {
    echo "Varijabla b je izmedu a i c\n";
} else {
    echo "Varijabla b nije između a i c\n";
}
*/

switch (date ('N')) {
    case 1:
        echo "Danas je ponedjeljak";
        break;
    case 2:
        echo "Danas je utorak";
        break;
    case 3:
        echo "Danas je srijeda";
        break;
    case 4:
        echo "Danas je četvrtak";
        break;
    case 5:
        echo "Danas je petak";
        break;
    case 6:
        echo "Danas je subota";
        break;
     case 7:
        echo "Danas je nedjelja";
        break;
    default:
        echo "Nepoznat dan";
        break;
    
}
