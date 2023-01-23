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
sum(true, false);

echo "\n";

//Function Return Value
echo "Function Return Value";
echo "\n";
echo "\n";

function sum2(int $first = 10, int $last = 10) : int {
    $total = $first + $last;
    return $total . PHP_EOL;
}

$result = sum2();
var_dump($result);

$result = sum2(100, 100);
var_dump($result);

echo "\n";

//function built in

echo "Function Built - In";
echo "\n";
echo "\n";

//date()
//untuk menampilkan tanggal dengan format tertentu
date_default_timezone_set("Asia/jakarta") . PHP_EOL;

//untuk menampilkan (hari, tanggal bulan tahun)
echo date("D, d m y z") . PHP_EOL;
echo date("H:i:s") . PHP_EOL;

///detik
//detik yang sudah berlalu sejak 1 january 1970
echo time() . PHP_EOL;

//menghitung 100 hari kedepan
echo date("l, d M Y", time()+60*60*24*1000) . PHP_EOL;


?>