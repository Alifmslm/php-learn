<?php 

//Global Scope

$name = "Hai";

function sayHello() {
    global $name;
    return $name . PHP_EOL;
}

echo "\n";

//Local Scope

function createName() { 
    $nama = "IDN";
}

createName();
echo $name . PHP_EOL;

function increment() {
    //Menyimpan data yg sebelumnya

    static $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter ++;
}

increment();
increment();
increment();
increment();
increment();

?>