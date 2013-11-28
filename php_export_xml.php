<?php
/*$_POST = array(
    'submit' => true,
    'name'   => 'Name',
    'mail'  => 'Email',
    'address'   => 'Adresse'
);*/
$count = 0;

if(isset($_POST['submit'])) {
	$count++;
	
	$xml               = new DOMDocument('1.0');
	$xml->formatOutput = true;
	$root              = $xml->createElement('rating');
	$root              = $xml->appendChild($root);
	$rootchild         = $xml->createElement('ratingchild');
	$rootchild->setAttribute('id', $count);
	$rootchild         = $root->appendChild($rootchild);

    $post = $_POST;
    unset($post['submit']);

    foreach ($post as $key => $value) {
        $node = $xml->createElement($key, $value);
        $rootchild->appendChild($node);
    }

    //echo $xml->saveXML();
	
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
