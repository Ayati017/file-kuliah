<?php
if (isset($_POST['submit'])) {
  echo "Nama : ".$_POST['submit']
}
if (isset($_POST['hobi"''])){
  foreach ($_POST [hobi] as $key => $val){
    echo $key. '=> .$val. '<br/>;
  }

  $namafile = $_FILES['gambar']['name'];
  $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$namafile);

?>
