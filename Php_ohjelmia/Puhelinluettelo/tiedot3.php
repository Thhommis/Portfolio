<?php
$file = fopen("tiedot2.txt","r");
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