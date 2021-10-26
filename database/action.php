<?php

require_once("connection.php");

// Status tidak error: error flag
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

// Upload File
$file = $_FILES['foto'];
$path = "kotak/";

// Check kondisi file
if ( !empty($file["name"]) ) {
    $filepath = $path . $file["name"];
    $upload = move_uploaded_file($file["tmp_name"], $filepath);
}
else {
    $filepath = "";
    $upload = false;
}

if( $upload == false ) {
    // echo "Upload gagal <a href='form_siswa.php'>Kembali</a>";
    // exit();

    $filepath = $path . "default.png";
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