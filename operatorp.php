<?php 
// operator aritmatika
echo "Operator Aritmatika";
echo "\n";
$a = 10;
$b = 5;
$c = 2.5;

$result = $a + $b;
echo $result;
echo "\n";

$result = $a - $b;
echo $result;
echo "\n";

$result = $c / $a;
var_dump($result);

echo "\n";

//operator penugasan
echo "Operator Penugasan";
echo "\n";

$total = 0;

$fruit = 5000;
$chichken = 10000;
$orangeJuice = 5000;

// 5000(fruit) + tambah 0(total) = 5000
$total += $fruit;
// 5000(total) + 10000(chicken) = 15000
$total += $chichken;
// 15000(total) + 5000(orangeJuice) = 20000
$total += $orangeJuice;

echo $total;
echo "\n";

//operator perbandingan
echo "Operator Perbandingan";
echo "\n";

var_dump("10" == 10);

var_dump("10" === 10);
echo "\n";

//operator logika
echo "Operator Logika";
echo "\n";

var_dump(true && false);
var_dump(true && true);

var_dump(true || false);
var_dump(true || true);

var_dump(true xor false);
var_dump(true xor true);

var_dump(!true);
var_dump(!false);

//increment & decreament
echo "increment & decreament";
echo"\n";
echo"\n";

$a = 10;
$b = $a++;

var_dump($a);
var_dump($b);
echo "\n";

//operator array
echo "Operator Array";
echo "\n";

$first = array(
    "last-name" => "Hasna",
    "first-name" => "Nadia"
);

$last = array(
    "first-name" => "Nadia",
    "last-name" => "Hasna"
);

$full = $first + $last;
var_dump($full);
echo "\n";

var_dump($first == $last);
var_dump($first === $last);

echo "\n";

//Dot Operator
//--------------
echo "\n";
echo "Dot Operetor";
echo "\n";
echo "\n";

$name = "Qonita";
$age = 10;
var_dump("Nama : " . $name . "\n" . "Umur : " . $age);

?>