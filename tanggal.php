<?php

echo "Tanggal Hari ini <br>";
echo date('d-m-Y');
echo"<br>";
echo "=========================";
echo"<br>";  // 21-01-2017 05:13:03

echo "Minggu depan <br>";
echo date('d-m-Y', strtotime('next sunday') );
echo"<br>";
echo "=========================";
echo"<br>";// 22-01-2017

echo "Bulan depan <br>";
echo date('d-m-Y', strtotime('next month') );
echo"<br>";



?>
