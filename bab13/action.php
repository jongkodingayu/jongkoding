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

//mengambil data file upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

//menangani file upload
if (!empty($files['name'])) {
    $filepath = $path . $files['name'];
    $upload = move_uploaded_file($files['tmp_name'], $filepath);
} else {
    $filepath = '';
    $upload = false;
}

// menangani error saat mengupload
if ($upload != true && $filepath != '') {
    exit("Gagal mengupload file  <a href='form_siswa.php'>Kembali</a>");
}

//menyiapkan query MySQL untuk dieksekusi
$query = "
INSERT INTO siswa
(nis, nama, jk, alamat, tmp_lahir, tgl_lahir, telepon, id_jurusan, foto)
VALUES
('{$nis}','{$name}','{$gender}','{$address}','{$placeOfBirth}','{$dateOfBirth}','{$phone}',0, '{$filepath}');";


//mengeksekusi MySQL query
$insert = mysqli_query($mysqli, $query);

//menangani jika error pada saat eksekusi query
if ($insert == false) {
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
} else {
    header("location:index.php");
}
