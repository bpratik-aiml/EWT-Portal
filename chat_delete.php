<?php
require 'vendor/autoload.php';


$client= new MongoDB\Client;
echo "Connection created";
$db = $client->companydb;

echo "1";

//$result = $db->CreateCollection('donation');

$collection = $db->chats ;

//if ($_GET["id"] !=""){
//$id = (isset($_GET['id']) ? $_GET['id'] : '');
$deleteResult = $collection->deleteOne(
    ['_id'=>new MongoDB\BSON\ObjectID($_GET['did'])]
);
var_dump($deleteResult);
echo "Data is deleted";
header ('Location: adminpanel.php');
//}
//else{
  //  echo "There was some error deleting the data!!!";
//}
//header('Location: adminpanel.php');
/*
    if($collection->deleteOne(_id : $id))
    {
        echo "Data is deleted";
        header('Location: adminpanel.php');
    }
    else{
        echo "ERROR";
    }

*/    ?>