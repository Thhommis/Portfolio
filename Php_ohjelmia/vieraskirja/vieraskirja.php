<html>
<head>
<title>Ensimmäinen pHp-tiedostoni</title>

<link rel="stylesheet" type="text/css" href="tyylit.css">
</head>
<body>
<h1>Vieraskirja-sovellus</h1>
Nimi:<br />
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="nimi"  /><br />

Viesti:<br />
<textarea name="viesti" rows="5" cols="40" >Kirjoita viestisti tähän </textarea><br />

<input type="submit" name="Lähetä" />
</form>

<?php
// Viestin lähettäminen vieraskirjaan
if (isset($_REQUEST['nimi']) && isset($_REQUEST['viesti'])){
	$nimi = $_REQUEST['nimi'];
	$viesti = $_REQUEST['viesti'];
	
	$tiedosto = fopen("vieraskirja.txt","a");
	$pvm = date("j.n.Y h:m:s");
	fwrite($tiedosto,"<p><strong>$pvm - $nimi:</strong>$viesti</p><br/>");
    fclose($tiedosto);
	
	include("vieraskirja.txt");
	}





?>
</body>
</html>