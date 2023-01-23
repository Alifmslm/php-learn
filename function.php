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

?>