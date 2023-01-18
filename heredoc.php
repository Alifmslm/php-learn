<?php

$name = "Alif";
$age = 6262;

echo <<<contoh
\t ini adalah contoh string yang panjang
tidak perlu ketik $name ENTER secara manual,
bisa menggunakan petik juga $age
contoh;

echo "\n";

echo <<< 'contoh'
ini adalah contoh string yang panjang
tidak perlu ketik ENTER secara manual,
bisa menggunakan petik juga
contoh

?>