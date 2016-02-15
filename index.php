
<?php session_start();

$GLOBALS["cookieNum"]=10;
//write cookie in DB
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
 

$mydb=mysql_select_db("app_dqy123",$con);

//fit flag in DB with cookie

if(isset($_COOKIE['id']))
 			{
    $id=$_COOKIE['id'];
    $result = mysql_query("SELECT * FROM cookieDB
    
WHERE id= '$id'");

while($row = mysql_fetch_array($result))
  {

 
     setcookie('flag',$row['flag'] );

  }
   
   
            }


else{
if(mysql_num_rows<$GLOBALS["cookieNum"])//
{  // $sql=mysql_query("select * from cookieDB" );
    
 //$id=(string)mysql_num_rows($sql)++;

    
$sql="INSERT INTO cookieDB (flag)
VALUES
('1')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

    $result = mysql_query("SELECT * FROM chat");
$id=0;
while($row = mysql_fetch_array($result))
  {
    $id++;
  
}

   
     setcookie('id',$id,3600+time());
     setcookie('flag',1);
    
echo "cookie successfully added"."<br/><br/><br/>";
    
}

    else echo"no cookie left. come later.";
}
            ?>

  <html>
    <head>
      
        <title>chat room</title><head>
        <body>

            <body style="text-align:center">
        
                <form action="staff.php" method="POST">
                  
                     <br /> <br />
                     Enter your password:
                     <br /> <br />
                    <input type="text" name="password" />
                    (123)
                     <br /> <br />
   
                    <input type="submit" value="staff">
                    
                 
                    
                </form>
                
                <form action="insert.php" method="POST">
                    Enter your sentences:
                     <br /> <br />
                    <textarea name="content" row=55 cols=55>
                    </textarea>
                 
                     
                    <br /> <br />
                    <input type="submit" value="submit">
                </form>      
                <br /> <br />
                chatting......
                <br /> <br />
                   <?php
                    mysql_select_db("app_dqy123", $con);

$result = mysql_query("SELECT * FROM chat");

while($row = mysql_fetch_array($result))
  {
    echo"NO.". $row['number'] . " " .":". $row['content'];
  echo "<br /><br /><br />";
  
}
                    ?>
  
</body>
    </html>
