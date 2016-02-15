
<?php


if($_COOKIE[flag]!=1){
echo "your cookie is blocked .";
     echo "<script>location.href='index.php';</script>";

}


else{
//conect to mysql

$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);

//define('DB_HOST',$_SERVER['HTTP_MYSQLPORT'].'.mysql.sae.sina.com.cn:'.$_SERVER['HTTP_MYSQLPORT']);

//$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

//$con = mysql_connect(tlsxmgekjhof.rds.sae.sina.com.cn \18841,"ddddd1","123456");
if (!$con)
  {
  die('Could not connect to saeMysql: ' . mysql_error());
  }

else{
     	$mydb=mysql_select_db("app_dqy123",$con);
  		if(!$mydb){
   		echo "DB is not created";
  		}
    /*  else
        echo "find db";*/
       
}
 
       mysql_select_db("app_dqy123",$con);

$sql="INSERT INTO chat (content)
VALUES
('$_POST[content]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "successfully added"."<br/><br/><br/>";

    
mysql_select_db("app_dqy123", $con);

$result = mysql_query("SELECT * FROM chat");

while($row = mysql_fetch_array($result))
  {
    echo"NO.". $row['number'] . " " .":". $row['content'];
  echo "<br /><br /><br />";
  
}
    
     echo"<h3><a href='index.php'>return </a></h3>";
mysql_close($con);
}
        /* 
        mysql_select_db("app_dqy123",$con);
mysql_query("INSERT INTO chat ('content' ) 
VALUES ('Peter')");
        $result = mysql_query("SELECT * FROM chat");
        while($row = mysql_fetch_array($result))
  {
  echo $row['number'] . " " . $row['content'];
  echo "<br />";
  }*/

//table
    /*mysql_select_db( app_dqy123", $con);

$sql="CREATE TABLE chat (content varchar(100))";

mysql_query($sql,$con);


//open and insert

mysql_select_db(" app_dqy123", $con);
$sql="INSERT INTO chat (content)
VALUES
('$_POST[sentence]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";*/
?>
