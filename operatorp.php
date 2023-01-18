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


?>