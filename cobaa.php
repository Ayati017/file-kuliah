<?php
$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(6, 7, 8, 9, 10);
$gabung = array();
for ($i=0; $i <count($arr1); $i++){
  $gabung[$i] = $arr1[$i];
}
print_r($gabung);
echo count($gabung)."<br>";
for ($i=0; $i<count($arr2); $i++){
  if (count($gabung) > 0)
  $index = count($gabung);
  $gabung[$i] = $arr2[$i];
}

    print_r ($gabung);
 ?>
