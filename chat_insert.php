<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client;

echo "Connection Created";
$db  =  $client->companydb;
$collection=$db->chats;
session_start();
if($_POST)
{
	$name=$_SESSION['USER'];
    $msg=$_POST['msg'];
    
	$sql=array("USER"=>$name,"message"=>$msg);

	$query = $collection->insertOne($sql);
	if($query)
	{
		header('Location: chatpg.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>