<?php

$user = array(array('nama' 			=> 'ayati',
					'nik' 			=> '1234',
					'jenis_kelamin' => 'wanita',
					'tanggal_lahir' => '05-30-2000');
			  array('nama' 			=> 'titin',
					'nik' 			=> '2345',
					'jenis_kelamin' => 'wanita',
					'tanggal_lahir' => '1999-05-20');  
			  array('nama' 			=> 'ila',
					'nik' 			=> '126789',
					'jenis_kelamin' => 'pria',
					'tanggal_lahir' => '1995-11-05');

		);

 foreach ($user as $key => $value) {
 		echo '$value';
 	}
 }

if(isset($_POST['submit'])){
	$nama 			= $_POST['nama'];
	$nik 			= $_POST['nik'];
	$jenis_kelamin 	= $_POST['jenis_kelamin'];
	$tanggal_lahir 	= $_POST['tanggal_lahir'];

}

?>