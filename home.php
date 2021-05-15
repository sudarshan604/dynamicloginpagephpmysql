 <?php
   session_start();  
   if(!isset($_SESSION['username']))
     header('location:http://localhost/login/login.php');
   
 
 ?>

   <html>
   
    <head>
    <link rel="stylesheet" href="style.css"> 

    
    </head>
     <body>
         
    <h1>hello,<?php echo $_SESSION['username'];?></h1>
  <a href='logout.php'>logout</a>
  

     </body>
   
   </html>