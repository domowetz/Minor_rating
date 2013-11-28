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
	
	$rating 		= $xml->createElement($_POST['minor']);
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
<title>Minorrating</title>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="_css/css.css" rel="stylesheet" type="text/css">
<script src="_js/modernizr.custom.63321.js"></script>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- Start Container -->
<div class="container">
	<!-- Start Main Section -->
	<section class="main">
		<!-- Start Form Section -->
		<form action="" method="post" name="myForm" id="myForm" class="form-1">
          <select name="minor">
                <option value="ininko">Internationale & Interkulturelle Kommunikation</option>
                <option value="mumu">Musiktheorie und Musikproduktion</option>
                <option value="muho">Musikgeschichte und Hörspiel</option>
                <option value="nada">Narrative Datenvisualisierung</option>
                <option value="moap">MobileApplications</option>
                <option value="mara">Markenkommunikation im Raum</option>
                <option value="macide">"Markenführung, CI und Designmanagement"</option>
                <option value="liko">Live Kommunikation</option>
                <option value="fier">Filmisches Erzählen</option>
                <option value="po">Postproduction</option>
                <option value="weim">Werbespot und Imagefilm</option>
            </select>
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

		</form> <!-- end Form -->
	</section> <!-- end Section -->

</div> <!-- End Container -->


<!-- Start Script Section -->

<script type="text/javascript">
$(document).ready(function()
{
  $.ajax({
    type: "GET",
    url: "data.xml",
    dataType: "xml",
    success: parseXml
  });
});


</script>

</body>
</html>
