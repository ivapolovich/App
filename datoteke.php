<?php

$people = [
    'name' => 'John Doe',
    'age' => 33,
    'gender' => 'male',
    'skills' => ['PHP', 'MySql', 'Javascript']
];

var_dump(
    json_encode($people)
); // kopiraš {"name":"John Doe","age":33,"gender":"male","skills":["PHP","MySql","Javascript"]} i stavljaš u novu datoteku nazvanu people.json