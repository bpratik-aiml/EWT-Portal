<?php
session_start();
if(isset($_POST['save']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(strcmp($rno,$urno)==0)
{
$name=$_SESSION['USER'];
$email=$_SESSION['email'];
echo "OTP was verified.";
header('Location: moneydonaton.php');
}
else{
echo "<p>Invalid OTP</p>";
}
}
?>