<html>
    <head><title>staff</title></head>
    <body>
<?php
session_start();
//session check password
$PW=123;
$password=$_POST['password'];
$_SESSION['password']=$password;

if($password==$PW){
    header("Location:http://1.dqy123.applinzi.com/staffFunction.php");
    exit();
}

else
    echo"wrong password!";

?>
    </body>
</html>
