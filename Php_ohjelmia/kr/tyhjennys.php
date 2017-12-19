<?php
$db_yhteys = mysqli_connect ("127.0.0.1","root","","omakanta");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($db_yhteys,"DELETE FROM ostoslista WHERE otettu=0 or 1");

mysqli_close($db_yhteys);
include("showList.php");
?>