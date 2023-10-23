<?php

$a = 0;
while ($a <= 10) {
    echo "$a \n";
    $a++;
}


$i = 0;
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) { 
        echo "$i \n";
    }
 }

 $names = ['Marko', 'Ivan', 'Jure', 'Ana', 'Iva'];

 foreach ($names as $index => $name) {
     echo "$index {$name}\n";
 }


