<html>
<head>
<title>Myyntipalsta</title>
</head>
<body>
<a href="myyntipalsta2.php">N‰yt‰ palstan tuotteet</a> <a href="myyntipalsta.php">Lis‰‰ tuote </a>
<h1>Myyntipalsta</h1>
<form method="post" action="myyntipalsta4.php" enctype="multipart/form-data"/>
Myyt‰v‰ tuote:<br />
<input type="text" name="nimi"  /><br />

Tuotteen kuvaus<br />

<input type="text" name="osoite"  /><br />

Yhteystiedot:<br />
<input type="text" name="posti"  /><br />

<input type="submit" name="L‰het‰" />
</form>
<?php

if (isset($_REQUEST['nimi']) && isset($_REQUEST['osoite']) && isset($_REQUEST['posti'])  ){
	

	
	$nimi = $_REQUEST['nimi'];
	$osoite = $_REQUEST['osoite'];
	$posti = $_REQUEST['posti'];
	
	
	$tiedosto = fopen("myyntipalsta.txt","a");
	fwrite($tiedosto,"$nimi,$osoite,$posti");
    fclose($tiedosto);
	include("myyntipalsta.txt");
	}

?>
</body>
</html>