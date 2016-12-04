<body style="background-image:url(a7.jpg);background-size:cover"></body>
<?php
   session_start();
   session_destroy();
?>

<div align="center">
  <h2>Anda telah berhasil logout..</h2>
  Silahkan klik <a href="login.php">disini</a> untuk login kembali
</div>
<h1><p align="center">Silahkan pilih komentar anda :</p></h1>
<table width="250" align="center">
<tr>
  <script type="text/javascript">
  function komentar() {
  alert("Terima Kasih");
  }
  </script>
  <td><button onclick="komentar()"><p algin="center">Memuaskan</p></button></td>
  <script type="text/javascript">
  function komentar() {
  alert("Terima Kasih");
  }
  </script>
  <td><button onclick="komentar()"><p algin="center">Kurang Memuaskan</p></button></td>
</tr>
</table>