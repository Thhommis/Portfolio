<?php
// Skripti hakee ostoslistan tuotteet ja tulostaa ne listana

$db_yhteys = mysqli_connect("127.0.0.1","root","","omakanta");
$sql = "SELECT * FROM ostoslista";
$tulokset = mysqli_query($db_yhteys,$sql) or die(mysqli_error($db_yhteys));

// Näytetään tietokannasta luettu ostoslista
echo '<ul>'.PHP_EOL;

while($rivi = mysqli_fetch_array($tulokset)) {
	if ($rivi['otettu']>0) $muoto = ' class="otettu"';
	else $muoto = '';
	echo "\t<li". $muoto . '><a href="#" onclick="checkItem('.$rivi['otettu'].','.$rivi['id'].')">' . 
	     $rivi['tuote'] . '</a></li>' . PHP_EOL;
}
echo '</ul>' . PHP_EOL;
?>