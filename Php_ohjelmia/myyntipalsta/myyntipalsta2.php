
<html>
<body>
<a href="myyntipalsta.php">Lis‰‰ tuote </a>




<?php
$file = fopen("myyntipalsta.txt","r");
echo '<table border="1">';
while(!feof($file))
{
$rivi = explode (";",fgets($file));
 echo "<tr>";
 foreach ($rivi as $solu) {
 echo "<td>$solu<td/>";
 
 }
  echo "</tr>";
 } 
 echo '</table>';


?>
</body>
</html>
