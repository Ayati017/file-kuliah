<?php
$larik = array(1,2,3,4); //jenis array yang pertama

$larik2 = array("satu" => 1,
                "dua"  => 2,
                 3,
                "7"    => 4,
                5,
                "3"    => 6,
                 7 );  //array assosiatif memanggil array menggunkana nama index nya


$larik3 = array (
          array(1,2,3,4),
          array(4,5,6),
          array(7,8,9)
);  //array dua dimensi

//menambahkan (baris 0 kolom 1) nilai 2
// dan (baris 2 kolom 2) nilainya 9
echo $larik3[0][1] + $larik3[2][2];
$jumlah = $larik[1] + $larik[3]; //baris dalam array  dimulai dari 0... $larik [1] berarti angka 2, kalau $larik[0] itu baru satu yang keluar
print_r ($larik2);

echo " hasil dari penjumlahan adalah  $jumlah";





 ?>
