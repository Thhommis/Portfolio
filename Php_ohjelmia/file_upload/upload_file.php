<?php
$upload_kansio ='tiedosto/';
$sallitut = array("jpg","jpeg","gif","png","pdf");
$merkki = ".";
$taulukko = explode($merkki,$_FILES["file"]["name"]);


$paate = end($taulukko);

if (in_array($paate,$sallitut) 
 || $_FILES["file"]["type"] == "image/jpeg"
  || $_FILES["file"]["type"] == "image/gif"
   || $_FILES["file"]["type"] == "image/jpng"
    || $_FILES["file"]["type"] == "application/pdf"
	) 


if ($_FILES["file"]["error"] > 0)
 {
  echo 'Virhe tiedostossa: ' . $_FILES["file"]["error"];
  }
  else {
  
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . $_FILES["file"]["size"]  . "<br>";
  echo "Tempfile: " . $_FILES["file"]["tmp_name"];
 
if (file_exists ($upload_kansio . $_FILES["file"]["name"])) {
	echo "Tämän niminen tiedosto on jo olemassa.";
	}


 move_uploaded_file($_FILES["file"]["tmp_name"],$upload_kansio.$_FILES["file"]["name"]);
  echo 'Tiedosto on tallentunut nimellä: ' . $upload_kansio . $_FILES["file"]["name"];
  
  
  
  
  }
   else {
  echo "Sori vaan, mutta tuollaista tiedostoa ei tueta.";
  }

?>