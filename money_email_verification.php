<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Activity Confirmation</title>
<script>  
    function validateEmail(id)
{
  var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
if(!email_regex.test($("#"+id).val()))
{
var div = $("#"+id).closest("div");
div.removeClass("has-success");
$("#glypcn"+id).remove();
div.addClass("has-error has-feedback");
div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
return false;
}
else{
    var div = $("#"+id).closest("div");
    div.removeClass("has-error");
$("#glypcn"+id).remove();
div.addClass("has-success has-feedback");
div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
    return true;
}

}

$(document).ready(
function()
{
$("#contactButton").click(function()
{
    if(!validateEmail("contactEmail"))
 {
    return false;
 }
 $("form#contactForm").submit();
}
);
}

</script> 
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
        <center>
    <form class="was-validated" action="money_otp_generation.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="RegInfo">Enter Email-Id for giving confirmation</label>
            <input type="email" class="form-control" id="E-mail" placeholder="E-mail" name="E-mail" value="" required>
        </div>
    </div>
    <br><br>
    <button type="submit" class="btn btn-success" id="contactButton" name ="submit">Send OTP</button> 
    <br>
    </form>
        </center>
    </h4>
    </center>
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