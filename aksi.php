<?php
include('koneksi.php');
if(isset($_POST['ttambah'])){ 
	$nis	= $_POST['nis'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	
	$sql	= 'insert into test (nis,nama,alamat,kelas) values ("'.$nis.'","'.$nama.'","'.$alamat.'","'.$kelas.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: siswa.php');
	}
	else{
		echo 'Gagal';
	}
}
if(isset($_POST['tedit'])){
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	$nis	= $_POST['nis'];
	
	$sql	= 'update test set nama="'.$nama.'", alamat="'.$alamat.'", kelas="'.$kelas.'" where nis="'.$nis.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: siswa.php');
	}
	else{
		echo 'Gagal';
	}
}
?>