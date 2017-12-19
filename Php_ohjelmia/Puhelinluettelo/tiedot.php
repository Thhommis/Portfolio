<html>
<head>
<title>Puhelinluettelo</title>
</head>
<body>
<a href="tiedot3.php">Tiedot</a>
<h1>Puhelinluettelo</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Nimi:<br />
<input type="text" name="nimi"  /><br />

Osoite:<br />

<input type="text" name="osoite"  /><br />

Postinumero:<br />
<input type="text" name="posti"  /><br />

Kaupunki:<br />
<input type="text" name="kaupunki"  /><br />

Puhelinnumero:<br />
<input type="text" name="puhnum"  /><br />

Sähköposti:<br />
<input type="text" name="sahko"  /><br />

<input type="submit" name="Lähetä" />

</form>
<?php
// Viestin lähettäminen Puhelinluetteloon
if (isset($_REQUEST['nimi']) && isset($_REQUEST['osoite']) && isset($_REQUEST['posti'])  && isset($_REQUEST['kaupunki'])  && isset($_REQUEST['puhnum'])  && isset($_REQUEST['sahko']) ){
	

	
	$nimi = $_REQUEST['nimi'];
	$osoite = $_REQUEST['osoite'];
	$posti = $_REQUEST['posti'];
	$kaupunki = $_REQUEST['kaupunki'];
	$puhnum = $_REQUEST['puhnum'];
	$sahko = $_REQUEST['sahko'];
	
	$tiedosto = fopen("tiedot2.txt","a");
	fwrite($tiedosto,"$nimi,$osoite,$posti,$kaupunki,$puhnum,$sahko/n");
    fclose($tiedosto);
	include("tiedot2.txt");
	}

?>
</body>
</html>