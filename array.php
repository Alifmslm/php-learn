<?php
// array numerik
echo "\n";
$value = array(1, 2, 3, 4, 5);
var_dump($value);

echo "\n";

$name = ["IDN", "Boarding", "School"];
var_dump($name);

echo "\n";

// operator array
// -----------------
// Mengakses data di array pada nomer index
$example = ["Alif", "Muslim", "Abdurrahman"];
echo $example[1];

echo "\n";

// -----------------
// Menambah data di array
$example[] = array(1, 2, 3, 4);
var_dump($example);

echo "\n";

//<--------/////-------->
// array asosiatif
$sekolah = array(
    "id" => "1",
    "name" => "Alif"
);

var_dump($sekolah);




?>