<?php

//if else evaluira svaku promjenu - npr kad radis sa ++ ili -- koristi se sa razlicitim uvijetima kada se logicki zeli grupirati


$age = $argv [1];  // argv unosis argument u terminal nakon imedatoteke.php

if ($age >= 18) {
    echo "Punoljetni ste\n";
} elseif ($age == 17) {
    echo "Skoro ste punoljetni\n";  // ako je uvijet ispunjen dalje više ne ide u else - izvršavanje staje
} else {
    echo "Maloljetni ste!\n";
    echo "Zabranjena konzumacija alkohola\n";
}


$i = 0;
switch ($i) {
    case 0:
        echo "i equals 0\n";
        break; // ako zbrisemo ovaj break, ispisat ce oba dva slučaja - on nastavlja dalje na sljedeće izraze
    case 1:
        echo "i equals 1\n";
        break;
    case 2:
        echo "i equals 2\n";
        break;
    default:
        echo "i is not equal to 0, 1 or 2 \n"; //ako niti jedan slučaj nije istinit
}


// match - uvijek ce rezultirati neki expressionom - vraca izraz - nakon sto naiđe na zadovoljavajući slučaj - staje i ne ide dalje
$food = 'apple';
$returnValue = match($food) {
    'apple' => "Yummy",
    'orange' => "Not bad",
    default => "ne znam za takvu hranu" // ako ne stavimo default blok i stavimo neki case koji ne postoji dobivamo FATAL ERROR - mora postojati izraz!
};

var_dump($returnValue); 

