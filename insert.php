<?php
    header('Location:index.php');
    $xmldoc = new DOMDocument();
    $xmldoc->load('data.xml');

    $newAct = $_POST['activity'];

    $root = $xmldoc->firstChild;

    $newElement = $xmldoc->createElement('activity');
    $root->appendChild($newElement);
    $newText = $xmldoc->createTextNode($newAct);
    $newElement->appendChild($newText);

    $xmldoc->save('data.xml');
?>