<?php session_start();

?>
<?php

//session check password
$PW=123;
$password=$_POST['password'];

if($password==$PW){
    // header("Location:http://1.dqy123.applinzi.com/staffFunction.php");
    //exit();
    $_SESSION['password']=true;
    
  
    echo "<script>location.href='staffFunction.php';</script>";
    
    
}


else
{ echo"wrong password! back.";

    echo "<script>location.href='index.php';</script>";
}
?>
