<?php


//syntax != artinya belum sama dengan

//angkanya hanya sampai satu bukan 0
function rekursif($i){
  echo "* <br>";
  $i--;
  if ($i != 0){
    rekursif ($i);
  }
}

rekursif(10);

?>
