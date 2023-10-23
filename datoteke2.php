<?php

use Symfony\Component\Console\Descriptor\MarkdownDescriptor;

$peopleJson = file_get_contents('people.json');

var_dump($peopleJson);

$people = json_decode($peopleJson, true); // ako stavimo bool kao true, nece nam izbacivati kao objekte (što bi bilo bez njega) već kao Array
var_dump($people);

var_dump($people[0]); // dohvaćamo prvu osobu
var_dump($people[0]['age']); // dohvaćamo godine prve osobe

/* foreach ($people as $person) {
    echo $person['name'] . "\n";
}  // ispisujemo imena osoba
*/

// dodavanje nove osobe

$people[] = [
    'name' => 'Marko',
    'age' => 25,
    'gender' => 'male',
    'skills' => ['PHP', 'MySql'],
    'isMarried' => false,
    'weight' => 80.2
];

$peopleJson = json_encode($people);

var_dump(
file_put_contents('people.json', $peopleJson) 
); // svaku puta kad pokrenemo u terminalu php datoteke2.php sprema nam iznova tu novu osobu koju smo unesli
