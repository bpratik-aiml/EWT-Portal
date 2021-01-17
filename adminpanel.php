
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Admin Panel</title>

<style>
body{
    background-color: #EBDEF0;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <a href="adminlogin.php" >
            <button class="btn btn-primary float-right" type="submit">Logout</button>
          </a>
          </ul>
        </div>
      </nav>
      <br><br>
    <h3><center>Volunteer List</center></h3>
    <?php
    $count=1;
                require 'vendor/autoload.php';

                $client = new MongoDB\Client;
                
                //echo "Connection Created";
                $db  =  $client->companydb;
                $collection=$db->empcollection;
                $cursor = $collection->find();
                ?>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Sr.No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Username</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            
        <?php foreach ($cursor as $doc) {?>
            <tr>
                <th scope="row"><?php echo $count;
                $count=$count+1; ?></th> 
          
                <td><?php echo $doc["First_Name"] ?></td>
                <td><?php echo $doc["Last_Name"]?></td>
                <td><?php echo $doc["Username"]?></td>
                <td><a href="delete.php?did=<?php echo $doc["_id"]; ?>"><!--<button type="submit" class="btn btn-danger">-->Delete</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <br><br>
    <h3><center>Student List</center></h3>
    <?php
                require 'vendor/autoload.php';
                $count=1;
                $client = new MongoDB\Client;
                
                //echo "Connection Created";
                $db  =  $client->companydb;
                $collection=$db->student;
                $cursor = $collection->find();
                ?>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Sr.No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Username</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            
        <?php foreach ($cursor as $doc) {?>
            <tr>
                <th scope="row"><?php echo $count;
                $count=$count+1; ?></th> 
                <td><?php echo $doc["First_Name"] ?></td>
                <td><?php echo $doc["Last_Name"]?></td>
                <td><?php echo $doc["Username"]?></td>
                <td><a href="std_delete.php?did=<?php echo $doc["_id"]; ?>"><!--<button type="submit" class="btn btn-danger">-->Delete</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <br><br>
    

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