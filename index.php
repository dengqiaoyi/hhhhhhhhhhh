
<html>
    <head>
      
        <title>chat room</title><head>
        <body>

            <body style="text-align:center">

              <!--  enter and show 

                   <form action="enterchat.php" method="POST">  -->
                
                <!-- insert to database -->
                 
                <form action="staff.php" method="POST">
                  
                     <br /> <br />
                     Enter your password:
                     <br /> <br />
                    <input type="text" name="password" />
                    
   
                    <input type="submit" value="staff">
                    
                </form>
                
                <form action="insert.php" method="POST">
                    Enter your sentences:
                     <br /> <br />
                    <textarea name="sentence" row=55 cols=55>
                    </textarea>
                 
                     
                    <br /> <br />
                    <input type="submit" value="submit">
                </form>
                    
                

</body>
    </html>
