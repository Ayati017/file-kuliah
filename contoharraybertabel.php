<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Ipk</th>
    </tr>
    <?php
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
    }

    array_push($data, 7,8,9,10); 
     ?>
</table>

  </body>
</html>
