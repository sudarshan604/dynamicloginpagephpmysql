

<?php     

session_start();


  $username=$_POST['username'];
 
 $userpassword=$_POST['userpassword'];
 
 
  
  $conn =mysqli_connect("localhost","root",'','institute');

//mysqli_connect_db($conn1,'institute');
  
 $sql ="SELECT *from tbl_user where  name='$username' && password='$userpassword'";

 $result=mysqli_query($conn,$sql);
//   //  if($result)
//   //  {
//   //    echo'connection succefully';
//   //  }tbl_user
//   //  else
//   //  {
//   //    echo mysqli_error($conn1);
//   //  }
 $num =mysqli_num_rows($result);
 
  
 if($num==1)
   {
   
    
    $_SESSION['username']=$username;
    header('location:http://localhost/login/home.php');   
  

   }
  else
  {
   
     header('location:http://localhost/login/login.php');   
  

  }


?>