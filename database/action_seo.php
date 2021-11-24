<?php

require_once("connection.php");

// Status tidak error: error flag
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['description']) ) $description = $_POST['description'];
else $error = 1; // Status error

if ( isset($_POST['keywords']) ) $keywords = $_POST['keywords'];
else $error = 1; // Status error

if ( isset($_POST['author']) ) $author = $_POST['author'];
else $error = 1; // Status error

if ( isset($_POST['robots_index']) ) $robots_index = $_POST['robots_index'];
else $error = 1; // Status error

if ( isset($_POST['robots_follow']) ) $robots_follow = $_POST['robots_follow'];
else $error = 1; // Status error

// Mengatasi jika terdapat error pada input
if ( $error == 1 ) {
    echo "Terjadi kesalahan pada proses input data";
    exit();
}

$select = "SELECT * FROM seo";
$data = mysqli_query($mysqli, $select);
$data = mysqli_fetch_assoc($data);

if ( !is_null($data) ) {
    $update = "UPDATE seo SET description = '{$description}', keywords = '{$keywords}', author = '{$author}', robot_index = {$robots_index}, robot_follow = {$robots_follow}";
    
    $query = mysqli_query( $mysqli, $update );
}
else {
    $insert = "INSERT INTO seo VALUES ('{$description}', '{$keywords}', '{$author}', {$robots_follow}, {$robots_index})";

    $query = mysqli_query( $mysqli, $insert );
}

// Menangani Ketika error pada saat eksekusi query
if ( $query == false ) {
    print_r(mysqli_error($mysqli));
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}

?>