<?php

function c_element($e_name, $parent)
	{
		global $xml;
		$node = $xml->createElement($e_name);
		$parent->appendChild($node);
		return node;	
	}
function c_value($value, $parent)
	{
		global $xml;
		$value = $xml->createElement($value);
		$parent->appendChild($value);
		return node;	
	}

?>

<?php
/*$_POST = array(
    'submit' => true,
    'name'   => 'Name',
    'mail'  => 'Email',
    'address'   => 'Adresse'
);*/

if(isset($_POST['submit'])) {
	
	$postid=$_POST['name'];
	$postmail=$_POST['mail'];
	
   	$doc               		= new DOMDocument('1.0');
	$doc->load("data.xml");
	$root						= $doc->getElementsByTagName("formeintrag")->item(0);
	
	$id = c_element("id", $root);
	c_value("$postid", $id);
	
	$mail = c_element("mail", $root);
	c_value("$postmail", $id);
	
   	$doc->formatOutput 		= true;
	$doc = save("data.xml");
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
