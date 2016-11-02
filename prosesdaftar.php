<?php
   require_once("proseskoneksi.php");
   $nis = $_POST['nis'];
   $nama = $_POST['nama'];
   $kelas = $_POST['kelas'];
   $jurusan = $_POST['jurusan'];
   $password = $_POST['password'];

  $conn = konek_db();

  $query = $conn->prepare("INSERT INTO latihan(nis, nama, kelas, jurusan, password) values(?,?,?,?,?)");
  $query->bind_param("sssss",$nis,$nama,$kelas,$jurusan,$password);
  $hasil = $query->execute();
       if($hasil) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
?>