<body style="background-image:url(a7.jpg);background-size:cover"></body>
<?php
 
mysql_connect("localhost", "root", "");
mysql_select_db("percobaan");
 
$query = "SELECT * from percobaan ";
$result = mysql_query($query) or die(mysql_error());
 
$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
  "username" => $row["username"],
  "password" => $row["password"],);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"Data-data terlampir\":" . $data . "}";
?><br><br>
<a href="login.php"><button>Back</button></a>