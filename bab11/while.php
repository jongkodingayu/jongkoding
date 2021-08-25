<?php

//pemberian nilai awal pada variabel x
$x = 1;

//perulangan dengan while selama nilai x kurang dari samadengan 5
while ($x <= 5) {
    echo "Angka " . $x . "<br>";
    $x++;
}

echo "<hr>";
//pemberian nilai awal pada variabel x
$x = 0;

//perulangan dengan while selama nilai x kurang dari samadengan 5
while ($x <= 100) {
    echo "Angka " . $x . "<br>";
    $x += 10;
}
