<body style="background-image:url(a7.jpg);background-size:cover"></body>
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:proseslogin.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>
