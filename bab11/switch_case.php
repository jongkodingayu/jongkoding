<?php

//variable kode menu
$kode_menu = 2;

//variabel total harga
$harga = 0;

//variabel paket menu bertipe string kosong, untuk menyimpan nama paket
$paket_menu = "";

//statement switch dengan acuan variable kode menu
switch ($kode_menu) {
    case 1:
        $paket_menu = "Paket 1";
        $harga = 10000;
        break;
    case 2:
        $paket_menu = "Paket 2";
        $harga = 12000;
        break;
    case 3:
        $paket_menu = "Paket 3";
        $harga = 15000;
        break;
}

//menampilkan output menu paket
echo "Anda memilih : " . $paket_menu . "<br>";
echo "Harga : Rp. " . $harga;
