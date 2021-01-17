<?php
session_start();
$success=0;
if(isset($_POST['save']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(strcmp($rno,$urno)==0)
{
$name=$_SESSION['USER'];
$email=$_SESSION['email'];
//For admin if he want to know who is register
/*$to="ritikarchaube@gmail.com";
$subject = "Thank you!";
$txt = "Some one show your demo Email id: ".$email." Mobile number : ".$phone."";
$headers = "From: studentstutorial@gmail.com" . "\r\n" .
"CC: divyasundarsahu@gmail.com";
mail($to,$subject,$txt,$headers);
echo "<p>Thank you for show our Demo.</p>";
//For admin if he want to know who is register
*/
echo "OTP was verified.";
$result=True;
}
else{
echo "<p>Invalid OTP</p>";
$result=False;
}
}
if($result=='True'){
    echo $_SESSION["Subject"];
    $subject=$_SESSION["Subject"];
    require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    echo "Connection Created";
    $db  =  $client->companydb;
    $collection = $db->empcollection;
   /* $array=array(
        ['First_Name'=>$_SESSION["USER"]],
        ['$set' => ['Subject'=>"English"]]
    );*/
   // $collection->updateOne(array('Name'=>$_SESSION['USER']), 
    //array('$set' => array('Subject' => new MongoBinData(file_get_contents($_SESSION["Subject"])))));
    $updateresult=$collection->updateOne(
        ['Username'=>$_SESSION["USER"]],
        ['$set' => ['Subject'=>$subject]]
    );
    $success=1;
    printf("Matched %d documents \n",$updateresult->getMatchedCount());
    printf("Modified %d documents \n",$updateresult->getModifiedCount());
    if($success==1){
        header('Location: mainpg.php');

    }
    else{
        echo "There was some error in adding your subject.";
    }
}
else{
    echo "There was some error...";
}
//resend OTP
/*if(isset($_POST['resend']))
{
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['email'];
$subject = "OTP";
$txt = "OTP: ".$rno."";
$headers = "From: otp@studentstutorial.com" . "\r\n" .
"CC: divyasundarsahu@gmail.com";
mail($to,$subject,$txt,$headers);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}*/
?>
