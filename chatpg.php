<?php session_start();?>

<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Chat Room</title>
<style>
body{
    background-color:#EBDEF0 ;
} 
h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }

  .btn-primary {
    background-color: #673AB7;
	}
.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="logout.php">
    <button class="btn btn-primary float-right">Logout</button></a>
    </nav>
    <div class="container">
        <center><h2>Welcome <span style="color:#A569BD;"><?php echo $_SESSION["USER"]; ?> !</span></h2>
          <label>Join the chat</label>
        </center></br>
        <div class="display-chat">
        <?php
        require 'vendor/autoload.php';

        $client = new MongoDB\Client;
        
        echo "Connection Created";
        $db  =  $client->companydb;
        $collection=$db->chats;
        $cursor = $collection->find();
          if($collection->find=array('$exists'=>true))
          {
              foreach($cursor as $row)	
              {
      ?>
              <div class="message">
                  <p>
                      <span><?php echo $row["USER"]; ?> :</span>
                      <?php echo $row['message']; ?>
                  </p>
              </div>
        <?php
              }
          }
          else
          {
              echo "No previous chat available";
      ?>
      <div class="message">
                  <p>
                      echo No previous chat available.
                  </p>
      </div>
        <?php
          } 
      ?>
      
        </div>
        <form class="form-horizontal" method="post" action="chat_insert.php">
          <div class="form-group">
            <div class="col-sm-10">          
              <textarea name="msg" class="form-control" placeholder="Type your message here..."></textarea>
            </div>
                   
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
      
          </div>
        </form>
      </div>
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