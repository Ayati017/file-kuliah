<?php
$iterator = 0;
function rekursifBaris($i){
  global $iterator;
  $iterator++;
  rekursifKolom($iterator);
  echo "<br>";
  if ($iterator<$i)
      rekursifBaris($i);
}

function rekursifKolom($j){
  echo "$j";
  $j--;
  if ($j>0)
        rekursifKolom($j);
}


rekursifBaris(5)




?>
