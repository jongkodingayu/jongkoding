<?php

require_once("connection.php");

//mendapatkan data nis
if (isset($_POST['nis'])) $nis = $_POST['nis'];
else {
    echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

//query untuk get data siswa
$query = "SELECT * FROM siswa WHERE nis='{$nis}'";

//eksekusi query
$result = mysqli_query($mysqli, $query);

//fetching data
foreach ($result as $siswa) {
    $foto = $siswa['foto'];
    $name = $siswa['nama'];
    $gender = $siswa['jk'];
    $address = $siswa['alamat'];
    $placeOfBirth = $siswa['tmp_lahir'];
    $dateOfBirth = $siswa['tgl_lahir'];
    $phone = $siswa['telepon'];

    $maleChecked = '';
    $femaleChecked = '';
}

if (isset($_POST['name'])) $name = $_POST['name'];

if (isset($_POST['gender'])) $gender = $_POST['gender'];

if (isset($_POST['address'])) $address = $_POST['address'];

if (isset($_POST['placeOfBirth'])) $placeOfBirth = $_POST['placeOfBirth'];

if (isset($_POST['dateOfBirth'])) $dateOfBirth = $_POST['dateOfBirth'];

if (isset($_POST['phone'])) $phone = $_POST['phone'];

//mengambil data file upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

//menangani file upload 
if (!empty($files['name'])) {
    $filepath = $path . $files['name'];

    $upload = move_uploaded_file($files['tmp_name'], $filepath);

    if ($upload) {
        unlink($foto);
    }
} else {
    $filepath = '';
    $upload = false;
}

//menangani error saat mengupload
if ($upload != true && $filepath != $foto) {
    exit("Gagal Mengupload File <a href='form_edit.php?nis={$nis}'>Kembali</a>");
}


//menyiapkan query untuk diekseskusi
$query = "
UPDATE siswa SET
nama='{$name}',
jk='{$gender}',
alamat='{$address}',
tmp_lahir='{$placeOfBirth}',
tgl_lahir='{$dateOfBirth}',
telepon='{$phone}',
foto = '{$filepath}'
WHERE nis = '{$nis}'
    ";

// var_dump($query);

//mengeksekusi MySQL query
$update = mysqli_query($mysqli, $query);


//menangani jika error pada saat eksekusi query
if ($update == false) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
} else {
    header("location:index.php");
}
