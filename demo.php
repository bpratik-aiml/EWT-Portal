<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;

echo "Connection Created";

$db  =  $client->companydb;
echo "database created";

$collection=$db->empcollection;

//$result = $db->createCollection('registration');
//echo "COllection created";

if($_POST){
    $find=array(
        'First_Name'=>$_POST['First_Name'],
        'Last_Name'=>$_POST['Last_Name'],
        'Male'=>$_POST['gender_type_male'],
        'Female'=>$_POST['gender_type_female'],
        'Contact'=>$_POST['Contact'],
        'Email'=>$_POST['E-mail'],
        'City'=>$_POST['City'],
        'Username'=>$_POST['Username'],
        'Password'=>$_POST['Password']
     );
    if($collection->insertOne($find))
    {
        echo "data is inserted";
        header('Location: login.php');
    }
    else{
        echo "ERROR";
    }
}
?>