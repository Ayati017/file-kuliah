<?php
$prima = array();
$counter = 0;
function bilangna_prima($i){
  global $counter;
  global $prima;
  if ($counter == 2 OR $counter == 3){
    array_push ($prima, $counter);
  }
  if ($counter % 2 !=0 AND $counter % 3 !=0
        and $counter !=1) {
    array_push($prima, $counter);
  }
  $counter++;
  if(count($prima) <= $i){
    bilangna_prima($i);
  }
}
bilangna_prima(5);
print_r($prima);
 ?>
