<?php

date_default_timezone_set('Asia/Jakarta');

// Array Satu Dimensi
$array[0] = "Mangga";

// Array Multidimensi
$array2[0][1] = "Semangka";

// Array Barang Multidimensi
$barang = (object) array(
    // 'nama'  => 'Sepatu',
    'nama'  => 'Sandal',
    // 'nama'  => array (
    //     'sepatu', 'sandal'
    // ),
    'ukuran' => '39',
    'warna' => 'biru',
    'stok' => (object) array (
        'available' => 10,
        'total' => 599,
        'rekam' => array ( // bukan array associative
            (object) array( // urutan dimulai dari 0
                'tanggal'   => date('l, d M Y (H:i:s)'),
                'jumlah'    => 100
            ), // 0
            (object) array(
                'tanggal'   => '02 Maret 2020',
                'jumlah'    => 100
            ), // 1
            (object) array(
                'tanggal'   => '02 Agustus 2020',
                'jumlah'    => 100
            ) // 2
        )
    ),
);

echo $barang->stok->rekam[0]->tanggal;

// // ==
// $data['seri'] = 'mercurial';

// // ==
// $dataBarangbaru = array ( 'seri' => 'mercurial' );
// $barang = array_merge($barang, $dataBarangbaru);

// print_r($barang);

// unset ($barang['seri']);

// // echo $barang['nama'][0];
// // echo $barang['stok']['rekam'][0]['jumlah'];

?>

<html>

    <head>
        <title>Barang</title>
        <script src="jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <table border=1>
            <tr>
                <td>Nama</td>
                <td><?=$barang['nama']?></td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td><?=$barang['ukuran']?></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td><?=$barang['warna']?></td>
            </tr>
            <tr>
                <td>Stok Tersedia</td>
                <td><?=$barang['stok']['available']?></td>
            </tr>
            <tr>
                <td>Stok Tersedia</td>
                <td><?=$barang['stok']['total']?></td>
            </tr>
            <tr>
                <td rowspan="3">Rekam Re-stock</td>
                <td><?=$barang['stok']['rekam'][0]['tanggal']?></td>
            </tr>
            <tr>
                <td><?=$barang['stok']['rekam'][1]['tanggal']?></td>
                </tr>
            <tr>
                <td><?=$barang['stok']['rekam'][2]['tanggal']?></td>
            </tr>
        </table>
    </body>

</html>