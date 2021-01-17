<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client;

echo "Connection Created";
$db  =  $client->companydb;
$collection=$db->chats;
session_start();
if($_POST)
{
	$name=$_SESSION['student'];
    $msg=$_POST['msg'];
    
	$sql=array("USER"=>$name,"message"=>$msg);

	$query = $collection->insertOne($sql);
	if($query)
	{
		header('Location: chatpg_student.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>