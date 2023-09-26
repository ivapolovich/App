<?php

//kostante i varijable - osnovne vrste izraza

$a = $b = foo(); // izraz je broj 5

echo $a, "\n"; // "\n" izbaci nam u novi red
echo $b, "\n";

//; signalizira da je to statement

//možemo grupirati statmente sa vitičastim zagradama

function foo()
{
    $c;
    return 5;
}

//, #, /* */ ...

include_once 'app.php';
include_once 'app.php';

//include ce ukljuciti file ako postoji ako ne postoji da warning i nastavi sa radom dok se require izbacuje FATAL ERROR

//include_once stavljamo ako ne želimo da se stalno uključuje
//require once radi istu stvar ali ako fulamo datoteku izbacuje error i staje sa izvršavanjem