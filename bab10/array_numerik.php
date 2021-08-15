<?php

//cara 1
$buah1 = ["rambutan", "mangga", "pisang", "jambu"];

// cara 2
$buah2 = array("rambutan", "mangga", "pisang", "jambu");

//cara 3

$buah3[0] = "rambutan";
$buah3[1] = "mangga";
$buah3[2] = "pisang";
$buah3[3] = "jambu";

echo "Buah 1 ";
echo "<br/>";
print_r($buah1);

echo "<br/>";
echo "Buah 2 ";
echo "<br/>";
print_r($buah2);

echo "<br/>";
echo "Buah 3 ";
echo "<br/>";
print_r($buah3);

//menampilkan buah ke 2 atau mangga
echo "<br><br>";
echo "Buah ke-2 adalah = " . $buah1[1];
