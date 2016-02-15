<?php session_start();

?>

<html>
    <head>
      
        <title>chat room</title><head>
        <body>

            <?php

if(isset($_SESSION['password'])&&$_SESSION['password'])
  

{



$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);


if (!$con)
  {
  die('Could not connect to saeMysql: ' . mysql_error());
  }

else{
     	$mydb=mysql_select_db("app_dqy123",$con);
    
  	if(!$mydb)
   		echo "DB is not created";
    else 
    {
        echo"current content :<br/>enter NO. to delete<br/>";
        $result = mysql_query("SELECT * FROM chat");

while($row = mysql_fetch_array($result))
  {
    echo"NO.". $row['number'] . " " .":". $row['content'];
  echo "<br />";
    }
 
}



//Delete
//conect to mysql
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);


if (!$con)
  {
  die('Could not connect to saeMysql: ' . mysql_error());
  }

else{
     	$mydb=mysql_select_db("app_dqy123",$con);
    
  	if(!$mydb)
   		echo "DB is not created";
 
}
 



//open and delete

$mydb=mysql_select_db("app_dqy123",$con);


mysql_query("DELETE FROM chat WHERE number='$_POST[num]'");

     echo"<h3><a href='staffFunction.php'>show  database after operate</a></h3>";
   
}
    
}

else{
    echo "no right". $_SESSION['views'];
     echo "<script>location.href='index.php';</script>";
    
    
}



           //block
//conect to mysql
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);


if (!$con)
  {
  die('Could not connect to saeMysql: ' . mysql_error());
  }

else{
     	$mydb=mysql_select_db("app_dqy123",$con);
    
  	if(!$mydb)
   		echo "DB is not created";
 
}
 



//open and block

$mydb=mysql_select_db("app_dqy123",$con);

$id=$POST['id'];
mysql_query("UPDATE cookieDB SET flag = '0'
WHERE id = '$id'");


//set cookie number
$GLOBALS["cookieNum"]=$_POST[cookieNum];
 



            ?>
        
         
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                  
                    
                     <br /> <br />
                    <input type="text" name="num" />         
   
                    <input type="submit" value="delete">
                    
                </form>
           

                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                  
                    
                     <br /> <br />
                     enter cookie number:
                    <input type="text" name="cookieNum" />         
   
                    <input type="submit" value="cookies">
                    
                </form>
            
            

          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                  
                    
                     <br /> <br />
              enter cookie id:
                    <input type="text" name="id" />         
   
                    <input type="submit" value="block">
                    
                </form>
           <?php
            echo"<h3><a href='index.php'>return </a></h3>";
            ?>
                
            

            
</body>
    </html>
