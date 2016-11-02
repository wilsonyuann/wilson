<?php
$db_host	= 'localhost'; 
$db_usn		= 'root';
$db_pwd		= '';
$db_name	= 'test';

$db_link	= mysqli_connect('localhost','root','','test');
if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
?>