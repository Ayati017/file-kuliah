<?php

//mengambil nilai di $e dari luar fungsi yaitu menggunakan syntax Global $e.. menarik variabel diluar fungsi agar dapat terbaca

$e = 4;

function doSomething($nim, $nama="nilai default"){
  Global $e;
echo " hallo world dari fungsi $nama dan $nim <br>";
echo " nilai duluar fungsi adalah $e";
}

doSomething(6701140252);
?>
