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

	$f1     		= $xml->createElement("f1");
	$f1Text 		= $xml->createTextNode($_POST['f1']);
	$f1->appendChild($f1Text);
	
	$f2     		= $xml->createElement("f2");
	$f2Text 		= $xml->createTextNode($_POST['f2']);
	$f2->appendChild($f2Text);
	
	$f3    			= $xml->createElement("f3");
	$f3Text 		= $xml->createTextNode($_POST['f3']);
	$f3->appendChild($f3Text);
	
	$f4    			= $xml->createElement("f4");
	$f4Text 		= $xml->createTextNode($_POST['f4']);
	$f4->appendChild($f4Text);
	
	$f5    			= $xml->createElement("f5");
	$f5Text 		= $xml->createTextNode($_POST['f5']);
	$f5->appendChild($f5Text);
	
	$f6    			= $xml->createElement("f6");
	$f6Text 		= $xml->createTextNode($_POST['f6']);
	$f6->appendChild($f6Text);
	
	$rating = $xml->createElement($_POST['minor']);
	$rating->appendChild($f1);
	$rating->appendChild($f2);
	$rating->appendChild($f3);
	$rating->appendChild($f4);
	$rating->appendChild($f5);
	$rating->appendChild($f6);

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
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="jqueryfunctions.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link href="_css/css.css" rel="stylesheet" type="text/css">
<script src="_js/modernizr.custom.63321.js"></script>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- Start Container -->
<div class="container">
	<!-- Start Main Section -->
	<section class="main">
    <h2>Minorbewertung</h2>
		<!-- Start Form Section -->
      <form action="" method="post" name="myForm" id="myForm" class="form-1">
        <select name="minor">
                <option value="ininko">Internationale und Interkulturelle Kommunikation</option>
                <option value="mumu">Musiktheorie und Musikproduktion</option>
                <option value="muho">Musikgeschichte und Hörspiel</option>
                <option value="nada">Narrative Datenvisualisierung</option>
                <option value="moap">MobileApplications</option>
                <option value="mara">Markenkommunikation im Raum</option>
                <option value="macide">Markenführung, CI und Designmanagement</option>
                <option value="liko">Live Kommunikation</option>
                <option value="fier">Filmisches Erzählen</option>
                <option value="po">Postproduction</option>
                <option value="weim">Werbespot und Imagefilm</option>
        	</select>
            <table width="800px">
                <tr>
                    <td width="400px"><label >Stimmen Aufwand und Ertrag?</label></td>
                    <td width="20px"><input type="text" id="f1" name="f1" style="border: 0; color: #f6931f; font-weight: bold;" /></td>
                    <td width="380px"><div id="slider-range-max-1"></div></td>
                </tr>
                <tr>
                    <td><label for="f2">Neues gelernt?</label></td>
                    <td><input type="text" id="f2" name="f2" style="border: 0; color: #f6931f; font-weight: bold;" /></td>
                    <td><div id="slider-range-max-2"></div></td>
                </tr>
                <tr>
                    <td><label for="f3">Kompetenzen im restlichen Studium verwendbar</label></td>
                    <td><input type="text" id="f3" name="f3" style="border: 0; color: #f6931f; font-weight: bold;" /></td>
                    <td><div id="slider-range-max-3"></div></td>
                </tr>
                <tr>
                    <td><label for="f4">Kompetenzen im restlichen Leben verwendbar</label></td>
                    <td><input type="text" id="f4" name="f4" style="border: 0; color: #f6931f; font-weight: bold;" /></td>
                    <td><div id="slider-range-max-4"></div></td>
                </tr>
                <tr>
                    <td><label for="f5">Organisation der Leistungsnachweise</label></td>
                    <td><input type="text" id="f5" name="f5" style="border: 0; color: #f6931f; font-weight: bold;" /></td>
                    <td><div id="slider-range-max-5"></div></td>
                </tr>
                <tr>
                    <td><label for="f6">Zufrieden mit dem Dozenten?</label></td>
                    <td><input type="text" id="f6" name="f6" style="border: 0; color: #f6931f; font-weight: bold;" /></td>
                    <td><div id="slider-range-max-6"></div></td>
                </tr>
                <tr>
                    <td><label for="f7">Kommentar</label></td>
                    <td><input type="text" name="comment"></td>
                    <td><div id="slider-range-max-7"></div></td>
                </tr>
            </table>
		  <p>
		    <input type="submit" name="submit" id="submit" value="Senden">
		  </p>

		</form> <!-- end Form -->
	</section> <!-- end Section -->
</div> <!-- End Container -->
</body>
</html>
