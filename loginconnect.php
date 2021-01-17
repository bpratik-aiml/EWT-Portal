<?php
require 'vendor/autoload.php';
session_start();

$client = new MongoDB\Client;

echo "Connection Created";
$db  =  $client->companydb;
$collection=$db->empcollection;
 
//$result = $companydb->createCollection('empcollection');

//var_dump($result)
$find=array(
    'Username'=>$_POST['Username'],
    'Password'=>$_POST['Password']
);
echo "afhf";
$user=$collection->findOne($find);
var_dump($user);
if($user){
    $success = "You are successully loggedIn";
    $_SESSION["USER"]=$_POST['Username'];
    header('Location: mainpg.php');
    }
    
    else {
        echo '<script>  
        alert("Wrong Password!!"); 
        </script>';
    //die("Mongo DB not installed");
    header('Location: login.php');
    }
    echo 'HEY';
/*
if($user->count() > 0){    
        echo "data is matched";
        $_SESSION["USER"]=$_POST['Username'];
        header('Location: mainpg.php');
    }
    else{
        echo "Invalid Username or Password!";
        header('Location: login.php');
    }
*/
    ?>