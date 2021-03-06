<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>EWT Portal</title>
    <link rel="text/stylesheet" href="styles.css">
<style>
h4{
  background-color: #71E9D3;
  width: 700px;
  border: 15px grey;
  padding: 50px;
  margin: 20px;
}
</style>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >Home Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Volunteer Login</a>
          <a class="dropdown-item" href="adminlogin.php">Admin Login</a>
          <a class="dropdown-item" href="StudentLogin.php">Student Login</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registrationform.php">Voluteer Registration</a>
          <a class="dropdown-item" href="StudentReg.php">Student Registration</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Donation 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="donationform.php">Food Donation</a>
          <a class="dropdown-item" href="money_email_verification.php">Money Donation</a>
        </div>
      </li>
    </ul>
  </div>
  
  <a class= "" href="login.php">
  <button class="btn btn-primary float-right">Login</button></a>
<h5>EWT PORTAL</h1>
</nav>




<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://w7.pngwing.com/pngs/963/617/png-transparent-charitable-organization-charity-donation-foundation-health-care-chare-love-text-logo.png" class="d-block w-100" width="900" height="600" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://s3.scoopwhoop.com/anj/599049483.jpg" class="d-block w-100" width="900" height="600" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9" class="d-block w-100" width="900" height="600" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<center>
<div class="card col-lg-10 col-md-6 col-sm-12">
<center><font face = "Comic sans MS" size ="7"><center>About Us</center></font>
<h4><font face="Calibri" color="blue" size="5">MONEY DONATED TILL NOW:<?php echo $_SESSION['AMOUNT']; ?></font></h4>
<img src="https://www.azquotes.com/picture-quotes/quote-one-thing-that-i-ask-of-you-never-be-afraid-of-giving-there-is-a-deep-joy-in-giving-mother-teresa-113-90-16.jpg">
</center>
</div>
<br><br><br><br><br><br>
<section>
  <div class="row">
    <div class="card col-lg-6 col-md-6 col-sm-12"> 
    <center><h4>Upcoming Events</h4></center>
    <ul>
      <li><a href="#">Joy Of Giving Week</a></li>
      <li><a href="#">Online Book Fair</a></li>
      <li><a href="#">Every Saturday/Sunday Activities</a></li>
    </ul>
    <br><br><br><br><br>
    <center><h4>General Instructions</h4></center>
    <h5>Due to the ongoing pandamic and in order to maintain social distancing we are following the norms provided by the 
    government and our weekly engagement between the volunteers and the students is been converted to online method where
    video and pdf format of eduction is taking place.Donation which is been received is been checked thoroughly by our clients 
    via aadhar card verification so that no unforseen events take place which can be a disaster.We request for your cooperation
    with the services provided as sometimes it can be a bit slower than expected.Lastly thankyou for the support without it the 
    organisation's working would be hampered.</h5>
    <br><br><br><br><br>
 
    </div>
    <div class="card col-lg-6 col-md-6 col-sm-12">
      <center><h4>This Weeks Art</h4></center>
      <img src="https://i.pinimg.com/originals/7c/c8/02/7cc802224c890cade29cfd51dd4fc2a7.jpg">
    </div>
</section>

<hr>
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
