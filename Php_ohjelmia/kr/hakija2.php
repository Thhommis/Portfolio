<?php

if(isset($_REQUEST["nimi"]) && !empty($_REQUEST["nimi"])) {
	include 'connect.php';
	$sql = "SELECT * FROM ostoslista WHERE tuote LIKE '%".$_REQUEST["nimi"]."%';";
	$tulokset = mysqli_query($db_yhteys,$sql) or die (mysqli_error($db_yhteys));

	echo '<ul>'.PHP_EOL;
	
	while($rivi = mysqli_fetch_array($tulokset)) {
		if ($rivi['otettu']>0) $muoto = ' class="otettu"';
		else $muoto = '';
			echo "\t<li". $muoto . '><a href="#" onclick="checkItem('.$rivi['otettu'].','.$rivi['id'].')">' . 
			$rivi['tuote'] . '</a>
			</li>' . PHP_EOL;
}
echo '</ul>'. PHP_EOL;
} else {
echo "Tuotetta ei voitu lisätä!!";
}
?>