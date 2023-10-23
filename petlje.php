<?php 
// WHILE petlja 


$a = 5; // automatski neistinit uvjet $a = 15 i while se ne izvršava

while ($a <= 10) {
    echo "Hello World\n";
    $a++;
} 

// DO WHILE



$a = 1;

do {
    echo "Hello World\n";

    $a++;
} while ($a <= 10); 


$a = 1;

do {
    echo "Hello World\n";

    $a++;

    if( $a > 10) {  // prekida petlju ovako
        break;
    }
} while (true); // ili ovako


// FOR PETLJA



for ($i = 0; $i < 10; $i++) { //ovako se najcesce koristi
   echo "Hello World\n";
}



$i = 0;
for ($i++) { // mi sami break-amo
    if (i >=10) {
        break;
    }
    echo "Hello World\n";
 }




 $i = 0;
 for () { 
    echo "Hello World\n";

    $i++;
 }


// for ($i = 0; $i < 10; $i++, print "Hello World\n");


$people = ['Marko', 'Ivan', 'Jure', 'Ana', 'Iva'];

//$people[0]; -> 'Marko'

for ($i=0; $i <= 4; $i++) { 
    echo "Polaznik:  {$people[$i]}\n";
}  // ako dodamo novog, opet moramo mijenjati $i <= 4

for ($i=0; $i < count($people); $i++) { 
    echo "Polaznik:  {$people[$i]}\n";
} // dodamo count i rijesimo problem




for ($i=0; $i < count($people); $i++) { 
    if (strlen($people[$i]) < 4) {
        continue;
    }
    echo "Polaznik: {$people[$i]}\n";
}


$people = ['Marko', 'Ivan', 'Jure', 'Ana', 'Iva'];

foreach ($people as $value) {
    echo "Polaznik : {$value}\n";
}
