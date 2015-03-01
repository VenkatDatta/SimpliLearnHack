<?php  

$var=$_GET["param"];

$conn = new mysqli("localhost","root" , "","kernel");
$var1=mysqli_query($conn,"SELECT Upvotes FROM doubt_table where Answer='$var' ");
$vr=mysqli_fetch_array($var1);
$as=$vr['Upvotes'];
$as++;
$qry=mysqli_query($conn,"UPDATE doubt_table SET Upvotes=$as");



?>