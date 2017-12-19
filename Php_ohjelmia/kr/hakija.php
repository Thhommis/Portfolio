<?php
$db_yhteys = mysqli_connect("127.0.0.1","root","","omakanta");
$sql = "SELECT * FROM ostoslista";
$tulokset = mysqli_query($db_yhteys,$sql) or die(mysqli_error($db_yhteys));



if(isset($_REQUEST["tuote"]) && !empty($_REQUEST["tuote"]){
include 'connect.php';
$sql = "SELECT * FROM ostoslista WHERE tuote LIKE '%".$_REQUEST["tuote"]."%';";
$tulokset = mysqli_query($db_yhteys,,$sql) or die (mysqli_error($db_yhteys));

echo '<ul>'.PHP_EOL;
while($rivi = mysqli_fetch_array($tulokset)) {
if ($rivi['otettu']>0) $muoto = ' class="otettu"';
else $muoto = '';
echo "\t<li". $muoto . '><a href="#" onclick"checkItem('.$rivi['otettu'].','$rivi['id'].')">'

echo '</ul>'. PHP_EOL;
} else {
echo "Tuotetta ei voitu lisätä!!";
}
}
?>