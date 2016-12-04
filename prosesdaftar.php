<body style="background-image:url(a7.jpg);background-size:cover"></body>
<?php
   require_once("konek.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $cekuser = mysql_query("SELECT * FROM percobaan WHERE username = '$username'");
   if(mysql_num_rows($cekuser) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Datanya tolong dilengkapi. <a href='daftar.php'>Back</a>";
     } else {
       $simpan = mysql_query("INSERT INTO percobaan(username, password) VALUES('$username','$pass')");
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>