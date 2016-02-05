

<?php

//conect to mysql

$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);

//define('DB_HOST',$_SERVER['HTTP_MYSQLPORT'].'.mysql.sae.sina.com.cn:'.$_SERVER['HTTP_MYSQLPORT']);

//$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

//$con = mysql_connect(tlsxmgekjhof.rds.sae.sina.com.cn \18841,"ddddd1","123456");
if (!$con)
  {
  die('Could not connect to saeMysql: ' . mysql_error());
  }

//creat a DB
if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

//table
mysql_select_db("my_db", $con);

$sql="CREATE TABLE chat (content varchar(100))";

mysql_query($sql,$con);


//open and insert

mysql_select_db("my_db", $con);
$sql="INSERT INTO chat (content)
VALUES
('$_POST[sentence]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
?>
