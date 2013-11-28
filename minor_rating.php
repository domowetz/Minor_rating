<?php
$behaviour=1;
if (isset($_POST["submit"])){
	
	echo $_POST[4];
	echo $_POST["ma"];

		
		$file = "data.xml";
		$userNode = 'value';
		
		$doc = new DOMDocument('1.0');
		$doc->preserveWhiteSpace=false;
		$doc->load($file);
		$doc->formatOutput=true;
		
		$root = $doc->documentElement;
		
		$post = $_POST;
		unset($post['submit']);
		
		$user = $doc->createElement($userNode);
		$user = $root->appendChild($user);
		
		foreach($post as $key => $value){
			$node = $doc->createElement($key,$value);
			$user->appendChild($node);
			}
			
		$doc->save($file) or die("Die Bewertungen konnten nicht gespeichert werden. Bitte noch einmal versuchen");
		//header('Location:minor_rating.php');
		
		$behaviour=2;
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
<?php
if($behaviour == 1){
?>

<form action="" method="post">
    Person:<input type="text" name="person"><br>
    Media Apps:<input type="number" name="ma"><br>
    CC:<input type="number" name="cc"><br>
    TV:<input type="number" name="tv"><br>
    Radio:<input type="number" name="rd"><br>
    Event:<input type="number" name="ev"><br>
    <input type="submit" value="senden" name="submit" id="submit">
</form>

<?php
} else if($behaviour == 2) {
?>
Vielen Dank für die Bewertung
<?php
}
?>

</body>
</html>