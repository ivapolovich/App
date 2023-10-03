<?php
// PHP nizovi - vjezba
$primeNumbers = [3, 5, 7, 9, 13];

var_dump(in_array(2, $primeNumbers));
var_dump(array_search(2, $primeNumbers));

$primeNumbers[] = 15;

var_dump(count($primeNumbers));
var_dump($primeNumbers);

arsort($primeNumbers);
var_dump($primeNumbers); 

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


