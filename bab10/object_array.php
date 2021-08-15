<?php

$pakaian = (object)[
    'nama' => 'Kemeja',
    'ukuran' => 'S',
    'harga' => 100000
];

//cara mengkonversi object menjadi array
$pakaian = (array)$pakaian;

//cara mengetahui bahwa variable pakaian adalah object -> array
echo "<pre>";
print_r($pakaian);
echo "<pre>";
