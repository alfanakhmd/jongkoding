<?php

require_once("connection.php");

// Mendapatkan Data NIS
if ( isset($_POST["nis"]) ) $nis = $_POST["nis"];
else {
    echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

// Query Get Data Siswa
$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ( $result as $siswa ) {

    $foto = $siswa["foto"];
    $name = $siswa["nama"];
    $gender = $siswa["jk"];
    $address = $siswa["alamat"];
    $placeOfBirth = $siswa["tmp_lahir"];
    $dateOfBirth = $siswa["tgl_lahir"];
    $phone = $siswa["telepon"];

    $maleChecked = "";
    $femaleChecked = "";

}

if ( isset($_POST['name']) ) $name = $_POST['name'];

if ( isset($_POST['gender']) ) $gender = $_POST['gender'];

if ( isset($_POST['address']) ) $address = $_POST['address'];

if ( isset($_POST['placeOfBirth']) ) $placeOfBirth = $_POST['placeOfBirth'];

if ( isset($_POST['dateOfBirth']) ) $dateOfBirth = $_POST['dateOfBirth'];

if ( isset($_POST['phone']) ) $phone = $_POST['phone'];

// Mengambil Data File Upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

// print_r($files);
// die();

// Menangani File Upload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];
    
    $upload = move_uploaded_file($files["tmp_name"], $filepath);

    if ( $upload ) {
        unlink($foto);
    }
}
else {
    $filepath = $foto;
    $upload = false;
}

// Menangani Error saat Mengupload
if ( $upload != true && $filepath != $foto ) {
    exit("Gagal Mengupload File <a href='form_edit.php?nis={$nis}'>Kembali</a>");
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    UPDATE siswa SET
        nama = '{$name}', 
        jk = '{$gender}', 
        alamat = '{$address}', 
        tmp_lahir = '{$placeOfBirth}', 
        tgl_lahir = '{$dateOfBirth}',
        telepon = '{$phone}',
        foto = '{$filepath}'
    WHERE nis = '{$nis}'";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani Ketika error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}

?>