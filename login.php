<!--/*<?php
/*
login page
*/

session_start();
require_once('demo.php');

if(isset($_SESSion['user'])){
    header('Location: mainpg.php');
}
if(isset($_POST['Username']) && isset($_POST['Password'])){
    $username = $_POST['Username'];
    $password = hash('sha256', $_POST['Password']);
    $result = $db->empcollection->findOne(array('Username'=>$username, 'Password'=>$password));
    if(!result)
    {
        echo "fgdtfyhf";
    } else{
        $_SESSION['user']=$result->_id;
        echo "matched";
        header('Location: mainpg.php');
    }
}
?>-->
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Volunteer Login</title>
<style>
body{
    background-color: #EBDEF0;
}
h4{
  background-color: white;
  width: 700px;
  border: 15px grey;
  padding: 50px;
  margin: 20px;
}
h5{
    color:black;
}
</style>
</head>
<body>
    <center><h1>Volunteer Login</h1></center>
    <form class="was-validated" action="loginconnect.php" method="post" method="post">
    <center>
    <h4> 
        <center>
    <div class="row row-cols-2">
        <div class="col">
            <label for="RegInfo">Username:</label>
            <input type="text" name="Username" value="" class="form-control" id="Username" placeholder="Username">
        </div>
        <div class="col">
            <label for="RegInfo">Password</label>
            <input type="password" name="Password" value="" class="form-control" id="Password" placeholder="Password">
        </div>
    </div> 
    <br><center><button class="btn btn-primary" id="submit" type="submit">Submit</button></center> 
    <div class="dropdown-divider"></div>
        <center>
        <a href="registrationform.php"><h5>New around here? Sign up</h5></a>
        <a class="dropdown-item" href="#"><h5>Forgot password?</h5></a>
        </center> 
    </h4>
    </center>
        <br>
        <br>
        <br><br><br><br><br><br><br>
    </center>
    </form>
    <footer>
        <h5><center>
            <p>Copyrights:2020<br><p>Made By :Pratik Bhatt,Ritika Chaube and Parth Desai</p></h5></center>
    </footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
