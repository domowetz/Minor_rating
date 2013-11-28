<?php
/*$_POST = array(
    'submit' => true,
    'name'   => 'Name',
    'mail'  => 'Email',
    'address'   => 'Adresse'
);*/

if(isset($_POST['submit'])) {
   	$doc               		= new DOMDocument('1.0');
	$doc->load("data.xml");
	$root						= $doc->getElementsByTagName("formeintrag")->item(0);
   	$doc->formatOutput 		= true;
	$root              		= $doc->createElement('formeintrag');
	$root              		= $doc->appendChild($root);

    $post = $_POST;
    unset($post['submit']);

    foreach ($post as $key => $value) {
        $node = $doc->createElement($key, $value);
        $root->appendChild($node);
    }

    //echo $doc->saveXML();
	
	$dieDatei = fopen("data.xml","w");
	fwrite ($dieDatei,$doc->saveXML());
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
