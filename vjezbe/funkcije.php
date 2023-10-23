<!-- <?php

function echoHelloWorld ()
{
    echo "Hello world!\n";
}

echoHelloWorld();


echoHelloWorld();

function echoHelloWorld ()
{
    echo "Hello world!\n";
}  // funkcija ce raditi i ako je naknadno deklarirana - php je dinamički jezik bez standardne kompilacije



echoHelloWorld();

if (true) {
    function echoHelloWorld()
    {
        echo "Hello World!\n";
    }
} // ako se radi o nekoj uvijetnoj funkciji - funkcija koja se izvršava samo u određenom uvijetu - onda se njezina deklaracija ne odradi u toj nekoj prvoj fazi/prvom dijelu interpretacije već nakon što se krene izvršavati - znači staviti najprije funkciju sa uvijetom i deklarirati pa onda pozvati funkciju)


// sve funkcije imaju globalan scope - mogu se pozivati u bilo kojoj skripti koju uvedemo :


function echoHelloWorld ()
{
    echo "Hello world!\n";
}


require 'app.php';  // u njemu staviš echoHelloWorld(); - izvršit će se funkcija


// funkcija se ne može redefinirati - jednom kad smo je definirali ne može vraćati ništa drugo osim onoga što je deklarirano!


function echoHelloWorld ()
{
    echo "Hello world!\n";
}

function echoHelloWorld()
{
    echo "Foof!";
}

echoHelloWorld();  // php nam i sam javlja da ovo nije moguće izvršiti


// Dvije vrste funkcija: funkcija koja odradi radnju 

function echoHelloWorld ()
{
    echo "Hello world!\n";
}

echoHelloWorld();


// i funkcija koja odradi kalkulaciju i vrati nekakav rezultat

function getHelloWorld ()
{
    return "Hello world!\n";   // vrati izraz tj string u ovom slučaju - ne može vraćati više vrijednosti
}

// možemo ju ili dodati u varijabli u echo-ati
$foo = getHelloWorld();

echo $foo;

//ili možemo samo staviti echo
echo getHelloWorld();

//možemo ga iskoristiti i u if uvjetu :
function isNumberEven($number)
{
    return $number % 2 == 0;
}

if (isNumberEven(2)) 
{
    echo "Number is even \n";    
}


// return se može koristiti samo u vraćanju jedne vrijednosti
// ako želimo vratiti više vrijednosti to radimo kroz nizove :

function getRandomNumbers()
{
    return [1, 2, 3];
}

var_dump(
    getRandomNumbers()
);

// ili korz destrukturiranje sa varijablama

function getRandomNumbers()
{
    return [1, 2, 3];
}

[$a, $b, $c] = getRandomNumbers();

var_dump(
    $a, $b, $c
); 

// anonimne funkcije - pogledaj array_filter - nema naziva samo smo ju proslijedili kao argument

$names = ['Iva', 'Ivan', 'Marija', 'Ana', 'Kristina'];

// hoćemo izfiltrirati tako da nam izbaci samo ona imena koja imaju više od tri znaka
// ako ta funkcija vrati true biti će taj element postavljen a ako vrati false biti će filtriran - pogledaj array_filter

$namesLongerThanThreeCharacters = array_filter($names,
    function ($name) 
    {
        return strlen($name) > 3;
    }
);

var_dump(
    $namesLongerThanThreeCharacters
);



function echoName (string $name)
{
    echo "My name is $name\n";
}

echoName('Iva');              // My name is Iva




function getSum(int $a, int $b)
{
    $sum = $a + $b;

    return $sum;
}

var_dump(
    getSum(1, 2)
);    // int (3)




function getSquared(int $a) // get Squared
{
    $sqrt = $a * $a;
    
    return $sqrt;
}

var_dump(
    getSquared(5)
);  // int(25) - dobivamo kvadrat broja




function getSquared(int $a) // get Squared
{
    $a = $a * $a;
    
    return $a;
}

$a = 5;
getSquared($a);
var_dump($a);     // int(5)  - zato što passing by value, sve naše argumente proslijeđuje kroz vrijednosti - on ne uzme tu varijablu i proslijedi neku referencu nego DOSLOVNO uzme njezinu vrijednost 5, proslijedi ju u funkciju. Funkcija uzme tu vrijednost 5, kreira neki svoj argument odnosno neku svoju lokalnu varijablu i onda radi sa njom. Što god se odvija unutar funkcije ne odražava se na našu varijablu. Priča se mijenja kad uvedemo REFERENCE & 

function getSquared(int &$a) // get Squared
{
    $a = $a * $a;
    
    return $a;
}

$a = 5;
getSquared($a);
var_dump($a); 



function makeCoffee($type = 'espresso')
{
    if ($type === null) {
        echo "Making a cup of tea\n.";
        return;
    }
    echo "Making a cup of $type\n";
}

makeCoffee('capuccino');
makeCoffee(); // ispisat ce esspresso
makeCoffee(null); // ispisat ce Making a cup of / ako napišemo if uvijet ispisuje nam se Making a cup of tea.
// ako unutar funkcije odredimo da mogu ići samo string varijable : function makeCoffee( string $type = 'espresso') izbacit ce nam PHP Fatal error:  Uncaught TypeError


















function makeYogurt($container = 'cup', $flavour = 'natural')
{
    echo "Making a $container of $flavour yogurt.\n";
}

//named arguments
makeYogurt(flavour:"blueberry"); // Making a cup of blueberry yogurt.

makeYogurt('bowl'); // making a bowl of natural yogurt.



// varijabilni broj argumenata - jer brojka varira nije fiksan broj argumenata koji proslijeđujemo u funkciju


function sum(...$numbers) // ... = koliko god mi argumenata ubacili, php će nam to proslijediti u funkciju
{
    $sum = 0;

    foreach ($numbers as $number) {
       $sum += $number;
    }

    return $sum;

    var_dump($numbers); // proslijediti će array tj niz
}

echo sum(1, 2, 3, 4, 5); // dobivamo njihov zbroj - 15