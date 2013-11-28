<?php
	include 'data_storage.php';
	
	$sxe = new SimpleXMLElement($xmlstr);
	$sxe->addAttribute('type', 'documentary');
	
	$movie = $sxe->addChild('movie');
	$movie->addChild('title', '$_POST[name]');
	$movie->addChild('plot', 'This is all about the people who make it work.');
	
	$characters = $movie->addChild('characters');
	$character  = $characters->addChild('character');
	$character->addChild('name', 'Mr. Parser');
	$character->addChild('actor', 'John Doe');
	
	$rating = $movie->addChild('rating', '5');
	$rating->addAttribute('type', 'stars');
	 
	echo $sxe->asXML();
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
