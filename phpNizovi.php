<?php
// PHP nizovi - vjezba
/* $phoneNumbers = [1, 2, 3, 4, 5];

var_dump(in_array(2, $phoneNumbers));
var_dump(array_search(2, $phoneNumbers));

$phoneNumbers[] = 6;

var_dump(count($phoneNumbers));
var_dump($phoneNumbers);

arsort($phoneNumbers);
var_dump($phoneNumbers); */

$users = [
    'user1'=> [
        'name' => 'Iva',
        'surname' => 'Doe',
        'age' => '30',
        'sex' => 'f'

    ],
    'user2' => [
        'name' => 'Karlo',
        'surname' => 'Soko',
        'age' => '24',
        'sex' => 'm'
    ],

];

unset($users ['user1']['sex']);
unset($users ['user2']['sex']);


$users[] = ['user3' => [
    'name' => 'Ana',
    'surname' => 'Lili',
    'age' => '30'
]];

var_dump($users);


