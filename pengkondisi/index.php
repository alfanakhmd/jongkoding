<?php

// If Tuggan dan If Else
$absen = 20;
$nilai = 90;
$cheat = true;

// Benar ATAU Salah = Benar
if ( ($nilai >= 75 || $absen < 10) && !$cheat ) {

    echo "Lulus";

}
else {

    echo "Tidak Lulus";

}


// If Bertingkat
$nilai = 50;

if ( $nilai <= 20 ) {
    echo "Nilai E";
}
else if ( $nilai <= 40 ) {
    echo "Nilai D";
}
else if ( $nilai <= 60 ) {
    echo "Nilai C";
}
else if ( $nilai <= 80 ) {
    echo "Nilai B";
}
else {
    echo "Nilai A";
}


// If Bersarang
$nilai = 50;
$alpha = 5;

if ( $nilai == 75 ) {

    if ( $alpha > 3 ) {
        
        echo "Tidak Lulus";
        
    }
    else {

        echo "Lulus";

    }

}


// Quiz
/**
 * 1. Barang harganya 20.000, jenis barang cuma satu
 * 2. Variabel yang menyimpan jml barang yang dibeli
 * 3. Jika total bayar lebih dari 50.000 maka ada diskon 10%
 * 4. Hitung dan tampilkan jumlah yang dibayarkan
 */
// $jml = 3;
// $harga = 20000;

// $diskon = 0;
// $total = $harga * $jml;

// if ( $total >= 50000 ) {
//     $diskon = $total * 10/100;
// }

// $bayar = $total - $diskon;

// echo "Total Bayar = Rp. " . $bayar;


// Switch Case
$menu = 2;
$harga = 0;
$paket_menu = "";

switch ( $menu ) {

    case 1:
    case 2:
        $paket_menu = "Paket 1 dan 2";
        $harga = 22000;
    break;

    case 3:
        $paket_menu = "Paket 3";
        $harga = 25000;
    break;

    default:
        $paket_menu = "Paket Mahasiswa";
        $harga = 5000;
    break;

}

echo "Paket dipilih = " . $paket_menu . "<br />";
echo "Harga = " . $harga;


// Quiz 2
/**
 * 1. Barang ada 3, harganya (20.000, 30.000, 50.000)
 * 2. Diskon barang 3: 20%
 * 3. Ketika total bayar > 75.000 dapat diskon 15%
 * 4. Diskon hanya boleh salah satu, dipilih diskon yang terbesar
 * 5. Hitung jumlah bayar
 */

$harga = 20000;
$diskon = 0;

?>

<html>

    <head>
        <title></title>
    </head>

    <body>
        <table border=1>

            <tr>
                <td>Harga</td>
                <td>Rp. <?=$harga?></td>
            </tr>

            <?php if ($diskon > 0) : ?>
            <tr>
                <td>Diskon</td>
                <td>Rp. <?=$diskon?></td>
            </tr>
            <?php else : ?>
            <tr>
                <td colspan='2'>Tidak ada diskon</td>
            </tr>
            <?php endif; ?>

            <tr>
                <th>Total</th>
                <th>Rp. <?=($harga - $diskon)?></th>
            </tr>

        </table>
    </body>

</html>