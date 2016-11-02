<?php
include('koneksi.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from test where nis="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: siswa.php');
?>