
<html>
    <head>
      
        <title>chat room</title><head>
        <body>

            <body style="text-align:center">

            
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                  
                    
                     <br /> <br />
                    <input type="text" name="ID" />         
   
                    <input type="submit" value="delete">
                    
                </form>
                <?php


//Delete
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


//open and delete

mysql_select_db("my_db", $con);

$sql = "delete from user where id='$ID' limit 1";
if (mysql_query($sql)) {
    echo 'deleted.';
}


//create cookie



?>
                
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" >
                   
                     <br /> <br />
    
                     Enter cookie value:
                     <br /> <br />
                    <input type="text" name="value" />         
   
                    <br /> <br />
                    <input type="submit" value="Create cookie" >
                </form>
                
                <?php

setcookie("test",$value，time()+3600);
if (isset($_COOKIE['test'])) {
    echo 'success';
}

 //访客怎么获取到这个cookie啊= =b         
//在访客发东西前加入判断？输入cookie的value，判断是否存在？有这么厉害的函数吗，好奇怪啊，cookie不是用来保存自己的东西的吗，这个管理员在这里添加来添加去  麻麻我好凌乱
//这个增的功能，这个不是提交了那边就出来了吗
//这个封禁功能，我的理解是提前挂了他的cookie,时限改成负数嘛



?>
                        
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" >
                   
                     <br /> <br />
    
                     Enter cookie value:
                     <br /> <br />
                    <input type="text" name="value" />         
   
                    <br /> <br />
                    <input type="submit" value="make this cookie die" >
                </form>
                
                <?php

setcookie("test",$value，time()-1);
if (!isset($_COOKIE['test'])) {
    echo 'success';
}
?>

</body>
    </html>
