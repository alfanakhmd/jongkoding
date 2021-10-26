<?php

if ( isset($_GET["angka1"]) ) $angka1 = $_GET["angka1"];
if ( isset($_GET["angka2"]) ) $angka2 = $_GET["angka2"];

if ( isset($angka1) && isset($angka2) ) {
    $hasil = $angka1 + $angka2;
}
else {
    $hasil = 0;
}

?>
<html>
    <body>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="GET">

            <input type="text" name="angka1">
            <input type="text" name="angka2">

            <input type="submit" value="Submit">

        </form>

        <h1><?=$hasil?></h1>
    </body>
</html>