<?php

require_once("connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['nis']) ) $nis = $_POST['nis'];
else $error = 1; // Status error

if ( isset($_POST['name']) ) $name = $_POST['name'];
else $error = 1; // Status error

if ( isset($_POST['gender']) ) $gender = $_POST['gender'];
else $error = 1; // Status error

if ( isset($_POST['address']) ) $address = $_POST['address'];
else $error = 1; // Status error

if ( isset($_POST['placeOfBirth']) ) $placeOfBirth = $_POST['placeOfBirth'];
else $error = 1; // Status error

if ( isset($_POST['dateOfBirth']) ) $dateOfBirth = $_POST['dateOfBirth'];
else $error = 1; // Status error

if ( isset($_POST['phone']) ) $phone = $_POST['phone'];
else $error = 1; // Status error

// Mengatasi jika terdapat error pada input
if ( $error == 1 ) {
    echo "Terjadi kesalahan pada proses input data";
    exit();
}

// Mengambil Data File Upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

// print_r($files);
// die();

// Menangani File Upload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];
    $upload = move_uploaded_file($files["tmp_name"], $filepath);
}
else {
    $filepath = "";
    $upload = false;
}

// Menangani Error saat Mengupload
if ( $upload != true && $filepath != "" ) {
    exit("Gagal Mengupload File <a href='form_siswa.php'>Kembali</a>");
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    INSERT INTO siswa 
    (nis, nama, jk, alamat, tmp_lahir, tgl_lahir, telepon, id_jurusan, foto) 
    VALUES 
    ('{$nis}', '{$name}', '{$gender}', '{$address}', '{$placeOfBirth}', '{$dateOfBirth}', '{$phone}', 0, '{$filepath}');";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani Ketika error pada saat eksekusi query
if ( $insert == false ) {
    print_r(mysqli_error($mysqli));
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}

?>