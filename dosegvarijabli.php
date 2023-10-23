<?php

$foo = 'Hello World'; // globalna varijabla

function echoHelloWorld ()
{
    //2. način kako riješiti - kažemo php-u na početku funkcije da su nekakve varijable koje mi koristimo zapravo globalne varijable
    global $foo;
    //$foo = "Hello world again"; // 1. način kako riješiti
    echo "$foo\n"; // sve varijable unutar funkcije su lokalne - ne prepoznaje varijablu iznad kao tu varijablu foo
    // ako koristimo primjer super globalnih varijabli onda umjesto u var_dump pišemo: echo "{$GLOBALS['foo']}\n";
}
var_dump($GLOBALS['foo']); // super globalna varijabla
require 'doseg2.php';

// varijabla STATIC - značajka/feature/atribut doesga varijabli - postoji samo u lokalnom dosegu funkcija

function echoNumber()
{
    static $a = 0; // definiranjem static varijabla se ne uništava tj php ih deklarira samo jednom

    echo $a, "\n";

    $a++;
}

echoNumber();
echoNumber();
echoNumber();  // ispisat ce tri puta nula! zašto -> php lokalne varijable nakon što završi sa njima - uništava ih! svaki put kad pozoveš funkciju iznova pozivaš varijablu a i svaki puta je 0 ! 


// koncept funkcija kao varijabla - možemo deklarirati neku funkciju, dat joj neki naziv, taj naziv funkcije spremiti unutar nekakve varijable i onda tu varijablu pozovemo (umjesto da pozovemo funkciju)


function echoNumbers()
{
    static $a = 0; 

    echo $a, "\n";

    $a++;
}


$bar = 'echoNumbers'; // neće raditi sa nazivima nekih ugrađenih funkcija (vidi ppt - npr za empty radimo funkciju koja to provjerava - iznad)
$bar();
$bar();



