<?php

// deklarasi dan pendefinisian variabel nilai
$nilai = 80;

//deklarasi dan pendefinisan variabel alpha
$alpha = 2;

//jika nilai diatas 75 maka siswa dinyatakan lulus
if ($nilai > 75) {

    //jika alpha diatas 3 maka siswa dinyatakan tidak lulus
    if ($alpha > 3) {
        //menampilkan output siswa tidak lulus
        echo "Anda dinyatakan Tidak Lulus";
    } else {

        //menampilkan output siswa lulus
        echo "Anda dinyatakan Lulus";
    }
}
