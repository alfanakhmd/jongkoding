<?php
$biru = "#0000FF";
$hijau = "#00FF00";

if ( date("h") > 12 ) {
    $bg_color = $biru;
}
else {
    $bg_color = $hijau;
}
?>

body {
    background-color: <?=$bg_color?>;
}