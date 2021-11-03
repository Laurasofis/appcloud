<?php
require_once __DIR__ . "/vendor/autoload.php"; 
$client = new MongoDB\Client(
    'mongodb+srv://sofia:admin1234@cluster0.dzkjr.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');

$tb = $client->datos->usuarios;
$cursor =$tb->find();

foreach ($cursor as $document) {
    echo $document["pass"]. "<br>";
}
?>