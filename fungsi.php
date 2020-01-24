<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];

//dengan fungsi yang menggunkana nilai default, dibagian $nama.. kalau $nim dibelakang $nama akan error karena nilai doSomething(6701140252)
//berisi unutk $nama.. jadi yang $nim harus ada isi`nya

function doSomething($nim, $nama="nilai default"){
echo " seseorang yang perutnya buncit dan tukang makan yaitu $nama yang $nim <br>";
}

doSomething($nama, $nim);
?>
