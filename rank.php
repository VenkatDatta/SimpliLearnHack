<?php

	$con=mysqli_connect("localhost","root","","kernel");
	$user=$_GET["param"];
  $score=$_GET["param2"];
    $result=mysqli_query($con,"select * from rank where User_ID='$user'");  
    mysqli_query($con,"update rank set Quiz='$score' where User_ID='$user'");
    $quiz;
    $Doubt_id_a;
    $Doubt_id_q;
    while($row=mysqli_fetch_array($result)){
          $quiz=$row['Quiz'];
          $Doubt_id_a=$row['DOUBT_ID_A'];
          $Doubt_id_q=$row['DOUBT_ID_Q'];
          $res=$quiz+$Doubt_id_q+($Doubt_id_a)*2;
          echo $res; 
          $result2=mysqli_query($con,"update users set rank=$res where User_ID=$user");
    }
     $result=mysqli_query($con,"select User_Name from users where User_ID='$user'"); 
     $row=mysqli_fetch_array($result);
     $qr=$row['User_Name'];
    header("location: http://localhost/simplihack/home/main.php?param=$user&param1=$qr");
    exit();

?>