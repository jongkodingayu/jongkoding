<?php

$pakaian = (object)[
    'nama' => 'Kemeja',
    'ukuran' => 'S',
    'harga' => 100000
];

//cara menampilkan data dari object
echo "Nama : {$pakaian->nama} <br>";
echo "Ukuran : {$pakaian->ukuran} <br>";
echo "Harga : {$pakaian->harga} <br>";
