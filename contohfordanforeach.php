<?php
$larik = array(1,2,3,4);
$larikassosiatif = array("arraysatu"     => "satu",
                "arraydua"      => "dua",
                "arraytiga"     => "tiga",
                "arrayempat"    => "empat" );

foreach ($larikassosiatif as $key => $value) {
  echo $key."<br>";
}

for ($i=0; $i < count($larik) ; $i++) {
  echo $larik[$i]."<br>";
}

$larik3 = array (
          array(1,2,3,4),
          array(4,5,6),
          array(7,8,9)
);

echo $larik3[0][1] + $larik3[2][2];
$jumlah = $larik[1] + $larik[3];
print_r ($larikassosiatif);

echo " hasil dari penjumlahan adalah  $jumlah";

 ?>
