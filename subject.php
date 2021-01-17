<?php
session_start();
echo "1";
echo $_GET['subject'];
echo $_GET["subject"];

if($_GET["subject"]=="English"){
    echo "English";
    $_SESSION["Subject"]= "English";
}
else if($_GET["subject"]=="Hindi"){
    echo'Hindi';
    $_SESSION["Subject"]= "Hindi";
}
else if($_GET["subject"]=="Mathematics"){
    $_SESSION["Subject"]="Mathematics";
}
else if($_GET["subject"]=="Science"){
    $_SESSION["Subject"]="Science";
}
else if($_GET["subject"]=="Social Studies"){
    $_SESSION["Subject"]="Social Studies";
}
else if($_GET["subject"]=="Art And Art Of Living"){
    $_SESSION["Subject"]="Art And Art Of Living";
}
else{
    echo "ERROR";
}
echo "2";
echo $_SESSION["Subject"];
header('Location:email_verification.php');
?>

