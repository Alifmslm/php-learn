<?php 

function sayHello() {
    echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();

echo "\n";
echo "\n";

//function argument
echo "Function Argument";
echo "\n";

function sayHello2($name) {
    echo "Hello $name" . PHP_EOL;
}

sayHello2("Iyal");
sayHello2("World");

echo "\n";

function sayHello3($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello3("Hasna", "Fauzi");
sayHello3("Hasna", "Fauzi");

echo "\n";

//function default argument
echo "Function default argument";
echo "\n";
echo "\n";

function sayHello4($name = "Niki") {
    echo "Hello $name" . PHP_EOL;
}

sayHello4();

echo "\n";

//text declaration
echo "Text Declaration";
echo "\n";
echo "\n";

function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Hasil dari $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false)

?>