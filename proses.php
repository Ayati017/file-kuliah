<!DOCTYPE html>
<html>
<head>
<title>DATA PEGAWAI</title>
<style type="text/css">
body,td,th {
 font-family: "Courier New", Courier, monospace;
}
</style>
</head>

<body>
<p>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepn = $_POST['telepon'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
if(($nama == "") || ($alamat == "") || ($telepon == "")) {
 echo "<center><h1>Maaf NIP / Nama masih kosong.</h1> <br />Anda akan kembali ke halaman utama dalam 10 detik. </center>";
 header('refresh:10;url=index.php');
 }
else {

//kondisi jika nip telah digunakan / telah tersimpan di database
if($nama == $record['nip']){

 echo "<center><h1>Maaf NIP $nama telah digunakan oleh user lain.</h1> <br />Anda akan kembali ke halaman utama dalam 10 detik. </center>";
 header('refresh:10;url=index.php');
 }

//jika belum tersimpan / belum digunakan maka data siap diproses dan disimpan ke database
else {

//menghitung gaji pokok
if ($jabatan == "Direktur"){
 $gaji_pokok = 4000000;
 }
else if ($jabatan == "Sekretaris"){
 $gaji_pokok = 3000000;
 }
else if ($jabatan == "Manajer"){
 $gaji_pokok = 350000;
 }
else if ($jabatan == "Keuangan"){
 $gaji_pokok = 320000;
 }

//Menghitung Tunjangan
if ($status == "Menikah"){
 $tunjangan = 0.1  * $gaji_pokok;
 }
else {
 $tunjangan = 0.05 * $gaji_pokok;
 }

//Menghitung Gaji Bersih
$gaji_bersih = $gaji_pokok + $tunjangan;
?>
</p>

  <div align="center">
<table width="395" border="1">
<tr>
<td bgcolor="#00FFFF"><table width="395" border="0">
<tr>
<td colspan="2"><div align="center"><strong>DAFTAR GAJI PEGAWAI</strong></div></td>
</tr>
<tr>
<td height="10" colspan="2"><hr /></td>
</tr>
<tr>
<td width="156">&nbsp;NIP</td>
<td width="229">: <?php echo "$nip"; ?></td>
</tr>
<tr>
<td>&nbsp;Nama</td>
<td>: <?php echo "$nama"; ?></td>
</tr>
<tr>
<td>&nbsp;Status</td>
<td>: <?php echo "$status"; ?></td>
</tr>
<tr>
<td>&nbsp;Jabatan</td>
<td>: <?php echo "$jabatan"; ?></td>
</tr>
<tr>
<td>&nbsp;GajiPokok</td>
<td>: <?php echo "Rp. " .number_format($gaji_pokok); ?></td>
</tr>
<tr>
<td>&nbsp;Tunjangan Gaji</td>
<td>: <?php echo "Rp. " .number_format($tunjangan); ?></td>
</tr>
<tr>
<td colspan="2">____________________________________ +</td>
</tr>
<tr>
<td>&nbsp;Gaji Bersih</td>
<td>: <?php echo "Rp. " .number_format($gaji_bersih); ?></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"><a href="javascript:history.back()">Kembali</a></td>
</tr>
</table></td>
</tr>
</table>
</div>
<?php
}
}
?>
</body>
</html>
