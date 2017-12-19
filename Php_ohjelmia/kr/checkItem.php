<?php
if (isset($_REQUEST['tuote']) && 
	isset($_REQUEST['otettu']) &&
	$_REQUEST['tuote'] >= 0 &&
	$_REQUEST['otettu'] >= 0) 
	{
	$id=$_REQUEST['tuote'];
	$otettu = $_REQUEST['otettu'];
	
	if ($otettu==0) $otettu = 1;
	else $otettu = 0;
	
	$db_yhteys = mysqli_connect("127.0.0.1","root","","omakanta");
	$sql = "UPDATE ostoslista SET otettu=". $otettu ." WHERE id=".$id;
	$tulokset = mysqli_query($db_yhteys,$sql) or die(mysqli_error($db_yhteys));

	include("showList.php");
}
else
{
	echo "<p>Jotain h‰ss‰kk‰‰!</p>";
}

?>