<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;

echo "Connection Created";
$db  =  $client->companydb;
$collection=$db->Admin;
 
//$result = $companydb->createCollection('empcollection');
$find=array(
    'Username'=>$_POST['Username'],
    'Password'=>$_POST['Password']
);
$result=$collection->findOne($find);
var_dump($result);
echo "afhf";

if($result){
    echo "data is matched";
    header('Location: adminpanel.php');
}
else{
    echo "Invalid Username or Password!";
    header('Location: adminlogin.php');
}
/*if($_POST!=""){
    $find=array(
        'Username'=>"Admin",
        'Password'=>"Admin"
    );
    if($collection->find($find))
    {
        echo "data is matched";
        header('Location: adminpanel.php');
    }
    else{
        echo "Invalid Username or Password!";
    }
}
else{
    echo "Please enter the Username or Password!";
}
*/
?>