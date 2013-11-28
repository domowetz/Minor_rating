<?php

if(isset($_POST['submit'])) {
	
	$file = 'data.xml';

	$fp = fopen($file, "rb") or die("cannot open file");
	$str = fread($fp, filesize($file));
	
	$xml               		= new DOMDocument('1.0');
	$xml->formatOutput 		= true;
	$xml->preserveWhiteSpace 	= false;
	$xml->loadXML($str) or die("Error");
	
	$root         = $xml->documentElement;

	$name     		= $xml->createElement("name");
	$nameText 		= $xml->createTextNode($_POST['name']);
	$name->appendChild($nameText);
	
	$mail     		= $xml->createElement("mail");
	$mailText 		= $xml->createTextNode($_POST['mail']);
	$mail->appendChild($mailText);
	
	$address    	= $xml->createElement("address");
	$addressText 	= $xml->createTextNode($_POST['address']);
	$address->appendChild($addressText);
	
	$rating 		= $xml->createElement('ratings');
	$rating->setAttribute('id', $count);
	$rating->appendChild($name);
	$rating->appendChild($mail);
	$rating->appendChild($address);

	$root->appendChild($rating);
	
	$dieDatei = fopen("data.xml","w");
	fwrite ($dieDatei,$xml->saveXML());
	fclose($dieDatei);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
<form action="" method="post" name="myForm" id="myForm">
  <p>Name:
    <input type="text" name="name" id="name">
  </p>
  <p>Mail: 
    <input type="text" name="mail" id="mail">
  </p>
  <p>Adresse: 
    <input type="text" name="address" id="address">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Senden">
  </p>
</form>
</body>
</html>
