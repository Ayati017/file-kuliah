<?php
function rekursifBaris($i){
  rekursifKolom($i);
  echo "<br>";
  $i--;
  if ($i>0)
      rekursifBaris($i);
}

function rekursifKolom($j){
  echo "*";
  $j--;
  if ($j>0)
        rekursifKolom($j);
}


rekursifBaris(5)


 ?>
