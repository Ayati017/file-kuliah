<?php
$larik = array(1,2,3,4,5);
array_shift($larik); //menghioangkan barispertama array
array_push($larik, 7,8); //menambah array
print_r ($larik);
echo "<br>";
$data = array(
        array("Nim"   => "123456",
              "nama"  => "Ayati",
              "prodi" => "MI",
              "ipk"   => "3.00" ),
        array("Nim"   => "670114",
              "nama"  => "siti",
              "prodi" => "KA",
              "ipk"   => "3.80" ),
        array("Nim"   => "7890",
              "nama"  => "mahmud",
              "prodi" => "TK",
              "ipk"   => "3.67" ),
        array("Nim"   => "670116",
              "nama"  => "ririn",
              "prodi" => "MP",
              "ipk"   => "3.78" )
             );

for ($i=0; $i < count($data) ; $i++) {
 foreach ($data[$i] as $key ) {
    echo $key."&nbsp";
}
 echo "<br>";
 echo "===============================";
 echo "<br>";
}

for ($i=0; $i < count($data) ; $i++) {
  echo $data[$i]["Nim"]."&nbsp";
  echo $data[$i]["nama"]."&nbsp";
  echo $data[$i]["prodi"]."&nbsp";
  echo $data[$i]["ipk"]."&nbsp";
  echo "<br>";
}

 ?>
