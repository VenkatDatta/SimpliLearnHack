<?php

$UserName=$_POST['UserName'];
$PassWord=$_POST['PassWord'];

$con=mysqli_connect("localhost","root","","kernel");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    }
        $result = mysqli_query($con,"SELECT User_Name,PassWord,User_ID FROM users ");
         while($row = mysqli_fetch_array($result)) {
        $user=$row['User_Name'];
        $pass=$row['PassWord'];
        $id=$row['User_ID'];

          if($UserName==$user && $PassWord==$pass){
          	header("Location:http://localhost/simplihack/home/main.php?param=$id&param1=$UserName");
          	exit();
          }
        }



?>