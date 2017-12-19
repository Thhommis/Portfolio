<?php
if (isset($_REQUEST["tuote"]) && !empty($_REQUEST["tuote"])) {
	
	$db_yhteys = mysqli_connect("127.0.0.1","root","","omakanta");
	$sql = "INSERT INTO ostoslista VALUES (default,'" . $_REQUEST['tuote'] . "',0);";
	$tulokset = mysqli_query($db_yhteys,$sql) or die(mysqli_error($db_yhteys));
	
	include "showList.php";
	
} else {
	echo "Tuotetta ei voitu lisätä!";
}
?>