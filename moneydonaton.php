<? session_start(); ?>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Money Donation Form</title>

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
 <h3><center>Money Donation</center></h3>
    
<form class="was-validated" action="money_db.php" method="post">
        <div class="container">
            <div class="row row-cols-2">
                <div class="col">
    <label for="Mondon">First Name:</label>
     <input type="text" class="form-control" id="First_Name"  placeholder="First Name" name="First_Name" value="" required>
	 </div>
	  <div class="col">
	 <label for="Mondon">Last Name:</label>
      <input type="text" class="form-control" id="Last_Name" placeholder="Last_Name" name="Last_Name" value="" required>
	 </div>
	 <div class="row row-cols-2">
                <div class="col">
                    <label for="RegInfo">Contact:</label>
                    <input type="tel" class="form-control" id="Contact" placeholder="Contact" name="Contact" pattern="^\d{10}$" value="" required>  
                </div>
	  <div class="col">
	 <label for="Mondon">Enter amount to be donated:</label>
     <input type="text" class="form-control" id="amount" placeholder="Amount" name="amount" value="" required>
	 </div>
	</div>&nbsp&nbsp&nbsp&nbsp
    <div class="row row-cols-1">
    <div class="col">
        If you want to give money in an offline mode:
        <label for="RegInfo">Address:</label>
        <input type="text" class="form-control" id="address" placeholder="address" name="address" value="" required>
    </div>
    </div>
    <br><br>        
	 <div class="col">
	 </div>
	 </div>
	   <div class="col-sm-6">
        <label for ="card"><h4>Fill card details</h4></label><br>
                <label for="input-type">Card type:</label>
                <div id="input-type" class="row">
                    <div class="col-sm-6">
                        <label class="radio-inline">
	  <input name="credit" id="credit" value="Credit" type="radio" />Credit
                        </label>
                    </div>
	  
	 <div class="col-sm-6">
                        <label class="radio-inline">
                            <input name="debit" id="debit" value="Debit" type="radio" />Debit
                        </label>
                    </div>
                </div>
            </div>
	  <div class="col">
	 <label for="Mondon">Enter Card Number:</label>
     <input type="text" class="form-control" id="credit" placeholder="Card Number" name="credit">
	 </div>
	
	
	 <label for="date">Month of expiry:</label>
	 <select id="month" name="month">
    <option value=" " name="month">Select Month of Expiry</option>
    <option value="Jan">Janaury</option>
    <option value="Feb">February</option>
    <option value="Mar">March</option>
    <option value="Apr">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="Aug">August</option>
    <option value="Sep">September</option>
    <option value="Oct">October</option>
    <option value="Nov">November</option>
    <option value="Dec">December</option>
    </select>&nbsp;
	
	  <label for="date">Year of expiry:</label>
  <select id="Year" name="Year">
      <option value=" " name="year">Select Year of Expiry</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
	<option value="2025">2025</option>
	<option value="2026">2026</option>
	<option value="2027">2027</option>
	<option value="2028">2028</option>
	<option value="2029">2029</option>
	<option value="2030">2030</option>
	<option value="2031">2031</option>
	<option value="2032">2032</option>
	<option value="2033">2033</option>
	<option value="2034">2034</option>
	<option value="2035">2035</option>
	<option value="2036">2036</option>
	<option value="2037">2037</option>
	<option value="2038">2038</option>
	<option value="2039">2039</option>
	<option value="2040">2040</option>
	</select><br>
	 
	 <div class="col">
	  <label for="Mondon">Enter CVV:</label>
     <input type="text" class="form-control" id="cvv" placeholder="CVV" name="cvv">
	 </div>
	  <div class="col">
	  <label for="name">Enter Name on the Card:</label>
     <input type="text" class="form-control" id="cname" placeholder="Name on the Card" name="cname" >
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
