<?php 

// $gender = "WANITA";
// $hi = null;

// if ($gender === "PRIA") {
//     $hi = "Hi Bro!";
// } elseif ($gender === "WANITA") {
//     $hi = "Hi Sis!";
// } else {
//     $hi = "KAKAKA";
// }

// echo $hi

echo "Ternary";
echo "\n";
echo "\n";

$gender = "Waria";
$hi = ("$gender" == "PRIA" ? "Hi Bro" : 
        ($gender == "Hewan" ? "Hi Wan" : 
        ($gender == "Waria" ? "Hi Bencong" : "Ng tau gender apaan")));

echo $hi . PHP_EOL;

?>