<?php

//POST

if (empty($_POST)) {
    echo 'Nema podataka za obradu';
    die();
}

if (!isset($_POST['firstname']) || !isset($_POST['lastname'])) {
    echo 'Nedovoljno podataka za obradu';
    die();
}

echo "Ime: {$_POST['firstname']}, prezime: {$_POST['lastname']}";



//GET

if (empty($_GET)) {
    echo 'Nema podataka';
    die();
}

echo 'Hello, ' . $_GET['name'];



var_dump($_GET);