<?php

//definisikan variabel nilai dengan tipe integer
$nilai = 60;

//menampilkan text awalan
echo "Nilain Anda : ";


//cek nilai < 25
if ($nilai < 25) {

    //menampilkan label nilai D
    echo "D";
} else if ($nilai < 50) {
    //menampilkan label nilai C
    echo "C";
} else if ($nilai < 75) {
    //menampilkan label nilai B
    echo "B";
} else if ($nilai < 100) {
    //menampilkan label nilai A
    echo "A";
}
