<?php
require_once __DIR__ . "/vendor/autoload.php"; 


$client = new MongoDB\Client(
    'mongodb+srv://sofia:admin1234@cluster0.dzkjr.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');

/*$tb = $client->datos->usuarios;

$document = array(
    "name" => $_POST["name"],
    "pass" => $_POST["pass"]
);

//$result= $tb->insertOne($document);
//echo $result->getInsertedCount();
$cursor = $tb->find($document);
if (count($cursor->toArray())>0){
    echo"Bienvenido";
}else{
    echo "No";
}*/

$tb=$client->Trafico->vehiculo;
$filter= ['$and'=>
            [
                ['IdPeaje'=>['$eq'=>'10']],
                ['CategoriaTarifa'=>['$eq'=>'I']]
               // ['Desde'=>['$eq'=>'01/01/2019 12:00:00 AM']]
            ]
        ];
$query = new MongoDB\Driver\Query($filter);
$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);


?>
