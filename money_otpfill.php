<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Activity Confirmation</title>
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
</style>
   
</head>
<body>
   
    <center>
    <h4> 
    <form class="was-validated" action = "money_checkotp.php" method="post">
        <center>
    <div class="row">
        <div class="col">
            <label for="RegInfo">Enter OTP</label>
            <input type="text" class="form-control" id="OTP" placeholder="OTP" name="otpvalue" value="" required>
        </div>
    </div>
    <br><br>
    <button type="submit" class="btn btn-success" id="save"name="save">Verify OTP</button> 
    <br>
    </h4>
    </center>
    </form>
        <br>
        <br>
        <br><br><br><br><br><br><br>
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