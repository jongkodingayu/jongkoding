<?php

require_once("connection.php");

//status tidak error
$error = 0;

//memvalidasi inputan
if (isset($_POST['nis'])) $nis = $_POST['nis'];
else $error = 1; // status error

if (isset($_POST['name'])) $name = $_POST['name'];
else $error = 1; // status error

if (isset($_POST['gender'])) $gender = $_POST['gender'];
else $error = 1; // status error

if (isset($_POST['address'])) $address = $_POST['address'];
else $error = 1; // status error

if (isset($_POST['placeOfBirth'])) $placeOfBirth = $_POST['placeOfBirth'];
else $error = 1; // status error

if (isset($_POST['dateOfBirth'])) $dateOfBirth = $_POST['dateOfBirth'];
else $error = 1; // status error

if (isset($_POST['phone'])) $phone = $_POST['phone'];
else $error = 1; // status error


//mengatasi jika terdapat error pada input
if ($error == 1) {
    echo "Terjadi kesalahan pada proses input data";
    exit();
}

//menyiapkan query MySQL untuk dieksekusi
$query = "
INSERT INTO siswa
(nis, nama, jk, alamat, tmp_lahir, tgl_lahir, telepon, id_jurusan)
VALUES
('{$nis}','{$name}','{$gender}','{$address}','{$placeOfBirth}','{$dateOfBirth}','{$phone}',0);";


//mengeksekusi MySQL query
$insert = mysqli_query($mysqli, $query);

//menangani jika error pada saat eksekusi query
if ($insert == false) {
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
} else {
    header("location:index.php");
}
