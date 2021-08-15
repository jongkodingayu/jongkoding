<?php

//mendefinisikan array multidimensi
$pakaian = [
    ["Kemeja", 22, 18],
    ["Blaser", 15, 13],
    ["Kaos", 5, 2],
    ["Kemeja Batik", 17, 15]
];

//menuliskan array multidimensi
echo "Jenis pakaian = " . $pakaian[0][0] . "<br>";
echo "Stok = " . $pakaian[0][1] . "<br>";
echo "Terjual = " . $pakaian[0][2] . "<br>";

echo "<hr>";
echo "Jenis pakaian = " . $pakaian[1][0] . "<br>";
echo "Stok = " . $pakaian[1][1] . "<br>";
echo "Terjual = " . $pakaian[1][2] . "<br>";
