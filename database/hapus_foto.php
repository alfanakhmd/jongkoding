<?php

require_once("connection.php");

// Mendapatkan Data NIS
if ( isset($_GET["nis"]) ) $nis = $_GET["nis"];
else {
    echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

// Query Get Data Siswa
$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";
// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data data Lama
foreach ( $result as $siswa ) {

    $fotoLama = $siswa["foto"];

}

if ( !is_null($fotoLama) && !empty($fotoLama) ) {

    $remove = true;
    if ( file_exists($fotoLama) ) {
        $remove = unlink($fotoLama);
    }

    if ( $remove ) {
        $query = "UPDATE siswa SET foto = NULL WHERE nis = {$nis}";
        $result = mysqli_query($mysqli, $query);
    }

}

header ("Location: form_edit.php?nis=" . $nis);

?>