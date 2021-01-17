<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Donation Form</title>
<style>
body{
    background-color: #EBDEF0;
}
input[type="tel"] {
  border: 1px solid #ddd;
  padding: 4px 8px;
}
input[type="tel"]:focus {
  border: 1px solid #000;
}
</style>
</head>
<body>
    <center><h1>Donation</h1></center>
    <form class="was-validated" action="donation_data.php" method="post" method="post">
        <div class="container">
            <div class="row row-cols-2">
                <div class="col">
                    <label for="RegInfo">First Name:</label>
                    <input type="text" class="form-control" id="First_Name" placeholder="First_Name" name="First_Name" value="" required>
                </div>
                <div class="col">
                    <label for="RegInfo">Last Name:</label>
                    <input type="text" class="form-control" id="Last_Name" placeholder="Last_Name" name="Last_Name" value="" required>
                </div>
            </div>
            <div class="col-sm-6">
                <label for="input-type">Gender *:</label>
                <div id="input-type" class="row">
                    <div class="col-sm-6">
                        <label class="radio-inline">
                            <input name="gender_type" id="input-type-male" value="Male" type="radio" />Male
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label class="radio-inline">
                            <input name="gender_type" id="input-type-female" value="Female" type="radio" />Female
                        </label>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2">
                <div class="col">
                    <label for="RegInfo">Aadhar Card Number:</label>
                    <input type="text" class="form-control" id="AadharNo" placeholder="Aadhar Number" name="AadharNo" value="" required>
                </div>
            </div>
            <div class="row row-cols-2">
                <div class="col">
                    <label for="RegInfo">Contact:</label>
                    <input type="tel" class="form-control" id="Contact" placeholder="Contact" name="Contact" pattern="^\d{10}$" value="" required>
                </div>
                <div class="col">
                    <label for="RegInfo">E-mail:</label>
                    <input type="text" class="form-control" id="E-mail" placeholder="E-mail" name="E-mail" value="" required>
                </div>
            </div>
            <div class="row row-cols-1">
                <div class="col">
                    <label for="RegInfo">City:</label>
                    <input type="text" class="form-control" id="City" placeholder="City,Address,Locality" name="City" value="" required>
                </div>
            </div>
            <div class="row row-cols-2">
                <div class="col">
                    <label for="RegInfo">Item Donating:</label>
                    <input type="text" class="form-control" id="ItemDonating" placeholder="ItemDonating" name="ItemDonating" value="" required>
                </div>
                <div class="col">
                    <label for="RegInfo">Quantity</label>
                    <input type="text" class="form-control" id="Quantity" placeholder="Quantity" name="Quantity" value="" required>
                </div>
            </div>
            <br><center><button type="submit" class="btn btn-primary">Submit</button></center>
        </div>
        <br> <br> <br> <br> <br>
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