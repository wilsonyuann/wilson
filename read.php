<?php
require_once "proseskoneksi.php";

$conn = konek_db();
$query = $conn->prepare("select * from latihan");
$result = $query->execute();

if(! $result)
	die("Gagal Query");

while ($result = $data->fetch_array()){
$nis = $data['nis'];
 echo "  
  
  Nis : ".$data['nis']." </br>
  Nama : ".$data['nama']."</br>
  Kelas : ".$data['kelas']." </br>
  Jurusan: ".$data['jurusan']." </br>
  ---------------------------------------- </br>
  ";
   
}
echo " Berhasil Mengambil data dari database";
?>  
<a href="delete.php"><button>Hapus</button></a>
<a href="create.php"><button>Tambah Baru</button></a>