<?php 

echo "If Else Statement : ";
echo "\n";
echo "\n";

$resultA = "A";
$resultB = "B";
$resultC = "C";
$resultD = "D";
$resultE = "E";

$nilai = 80;
$absen = 75;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda $resultA" . PHP_EOL;

} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda $resultB" . PHP_EOL;

} elseif ($nilai >= 60 && $absen >= 60){
    echo "Nilai Anda $resultC" . PHP_EOL;

} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda $resultD" . PHP_EOL;
} else {
    echo "Nilai Anda $resultF" . PHP_EOL;
}

?>