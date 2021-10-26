<?php

// for ( $i = 1; $i <= 1000; $i++ ) {

//     echo $i . "<br />";

// }

// Searching Algorithm
// $buah = array ();

// $cari = "apel";
// $i = 0;

// echo "Ukuran array = " . sizeof($buah) . "<br />";

// while ( $i < sizeof($buah) ) {

//     echo "Pengecekan apakah " . $cari . " = " . $buah[$i] . "<br />";

//     if ( $cari == $buah[$i] ) {
//         echo $cari . " ditemukan pada index ke-" . $i . "<br />";
//         break; // menghentikan perulangan
//     }

//     $i++;

// }

// $i = 11;

// do {
    
//     echo $i . "<br />";

//     $i++;

// } while ($i <= 10);


// $blog = array (
//     (object) array (
//         "judul" => "Judul Judulan",
//         "text"  => "Lorem ipsum dolor sit amet"
//     ),
//     (object) array (
//         "judul" => "Judul Judulan",
//         "text"  => "Lorem ipsum dolor sit amet"
//     ),
//     (object) array (
//         "judul" => "Judul Beneran",
//         "text"  => "Lorem ipsum dolor sit amet"
//     ),
//     (object) array (
//         "judul" => "Judul Judulan",
//         "text"  => "Lorem ipsum dolor sit amet"
//     ),
// );

// foreach ( $blog as $i => $data ) {

//     echo $i . " - " . $data->judul . '<br />';

// }

// Quiz 1
// Tampilkan deret bilangan prima
// 2, 3, 5, dst 20

for ( $i = 0; $i <= 10; $i++ ) {
    for ($j = 0; $j <= 10; $j++ ) {
        echo $i . "x" . $j . " = " . $i*$j . "<br />";
    }
}


for ( $i = 0; $i <= 20; $i++ ) {

    for ( $j = 2; $j <= $i; $j++ ) {
        
        $hasilBagi = $i % $j;

        if ( $i != $j && $hasilBagi == 0 ) {
            break;
        }
        else if ($i == $j) {
            echo $i . "<br />";
        }

    }

}

?>