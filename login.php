<body style="background-image:url(a7.jpg);background-size:cover"></body>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:proseslogin.php'); }
   require_once("konek.php");
?>

<title>Form Login</title>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>SELAMAT DATANG</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
  <script type="text/javascript">
  function pemilik() {
  alert("Semua ini hasil karya : Wilson 00000017037");
  }
  </script>
  <button onclick="pemilik()">Klik Untuk Melihat Pemilik</button><br><br>
  <a href="json.php"><button>Username dan Password yang sudah terdaftar</button></a>
</div>
