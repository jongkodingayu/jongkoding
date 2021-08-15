<?php

$pakaian = (object)[
    'nama' => 'Kemeja',
    'ukuran' => 'S',
    'harga' => 100000,
    'warna' => [
        'polos' => 'hitam',
        'motif' => 'batik'
    ]
];

$pakaian->warna = (object)$pakaian->warna;
//cara mengetahui object multidimensi
echo "<pre>";
print_r($pakaian);
echo "<pre>";
