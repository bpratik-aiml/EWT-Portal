<?php
require 'vendor/autoload.php';

echo "Connection created";

$client= new MongoDB\Client;
$db = $client->companydb;
//$result = $db->CreateCollection('donation');

$collection = $db->donation ;

if ($_POST){
    $value = array(
        'First_Name'=>$_POST['First_Name'],
        'Last_Name'=>$_POST['Last_Name'],
        'Male'=>$_POST['input-type-male'],
        'Female'=>$_POST['input-type-female'],
        'AadharNo'=>$_POST['AadharNo'],
        'Contact'=>$_POST['Contact'],
        'Email'=>$_POST['E-mail'],
        'City'=>$_POST['City'],
        'ItemDonating'=>$_POST['ItemDonating'],
        'Quantity'=>$_POST['Quantity']
    );
    if($collection->insertOne($value))
    {
        echo "Data is inserted.";
        header('Location: mainpg.php');
    }
    else{
        echo "ERROR";
    }
}
else{
    echo "Please enter valid details.";
}
?>