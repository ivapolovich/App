<?php

// vjezba1
function getHelloWorld()
{
    return "Hello World";
}

$foo = getHelloWorld();

echo $foo, "\n"; 

//vjezba2

function getUppercaseFullName($name, $surname)
{
    $fullName = $name . ' ' . $surname;

    return strtoupper($fullName);
}

$fullname = getUppercaseFullName('John', 'Doe');

echo $fullname, "\n";
