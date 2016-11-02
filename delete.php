<?php
   require_once("proseskoneksi.php");

	$conn = konek_db();

	if(! isset($_GET["nis"]))
	die("Tidak ada id siswa");

$id = $_GET["nis"];
$query = $conn->prepare("select * from latihan where nis=?");
$query->bind_param("nis",$nis);
$result = $query->execute();

if (! $result)
	die("Gagal Query");

$rows = $query->get_result();
if ($rows->num_rows == 0)
	die("Produk tidak ditemukan");

 	$query = $conn->prepare("delete from latihan where id=?");
	$query->bind_param("nis",$nis);
	$result = $query->execute();

	if($result){
	echo "<p>Data produk berhasil dihapus</p>";
	echo "<a href=read.php><button>BACK</button></a>";
	}
	else
	echo "<p>Gagal menghapus data produk</p>";
?>