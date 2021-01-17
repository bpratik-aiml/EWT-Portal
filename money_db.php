<?php
require 'vendor/autoload.php';

echo "Connection created";

$client= new MongoDB\Client;
$db = $client->companydb;

$collection = $db->Money_Donation ;
//$month=$_POST['month'];
session_start();
$_SESSION["AMOUNT"]=$_SESSION["AMOUNT"] + $_POST['amount'];
echo $_SESSION["AMOUNT"];
if ($_POST){
    $value = array(
        'First_Name'=>$_POST['First_Name'],
        'Last_Name'=>$_POST['Last_Name'],
        'E-mail'=>$_SESSION['email'],
        'Contact'=>$_POST['Contact'],
        'Amount'=>$_POST['amount'],
        'Address'=>$_POST['address'],
        'Card_type'=>$_POST['credit'],
        'Card_type'=>$_POST['debit'],
        'Month of expiry'=>$_POST['month'],
        'Year of expiry'=>$_POST['year'],
        'cvv'=>md5($_POST['cvv']),
        'Name on the card'=>$_POST['cname']
);
    if($collection->insertOne($value))
    {
        echo "Data is inserted.";
     }
    else{
        echo "ERROR";
    }
}
else{
    echo "Please enter valid details.";
}

$to=$_SESSION['email'];
$subject = "Hello ".$_POST['First_Name']."";
$txt = "We have received the request for donation amount of Rs. ".$_POST['amount']." given by you. A member of our organization will reach you in 2-3 days to collect the donation money. Thanks for your donation.";
$headers = "From: pratikbhatt503@gmail.com" . "\r\n" .
"CC: parthdesai0849@gmail.com";
if(mail($to,$subject,$txt,$headers)){

echo "Mail was sent successfully.";
header( "Location: demo_mainpg.php" );
}
else{
    echo "There was some error.";
} 
?>