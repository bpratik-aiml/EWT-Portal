<?php
require 'vendor/autoload.php';
session_start();

$client = new MongoDB\Client;

echo "Connection Created";
$db  =  $client->companydb;
$collection=$db->student;
 
//$result = $companydb->createCollection('empcollection');

//var_dump($result)
echo "afhf";
if($_POST!=""){
    $find=array(
        'Username'=>$_POST['Username'],
        'Password'=>$_POST['Password']
    );
    if($collection->findOne($find))
    {
        echo "data is matched";
        $_SESSION["student"]=$_POST['Username'];
        header('Location: studentpanel.php');
    }
    else{
        echo "Invalid Username or Password!";
    }
}
else{
    echo "Please enter the Username or Password!";
}
?>