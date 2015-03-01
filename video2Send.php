<?php

$bq = $_POST["Question"];
$User = $_POST["User"];
$TimeStamp = $_POST["TimeStamp"];
$Doubt_ID = $_POST["Doubt_ID"];
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password,"kernel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
// Perform queries
echo $bq."  ".$TimeStamp."  ".$User;
$sql = "INSERT INTO doubt_table (Doubt_ID,Question,Upvotes,User_ID,TimeStamp) VALUES ('$Doubt_ID','$bq',0,$User,$TimeStamp)";
if(mysqli_query($conn, $sql))
{
	
}



$sql = "SELECT Doubt_ID_Q FROM users WHERE User_ID = '$User'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$dq = $row['Doubt_ID_Q'];
$newdq = $dq.",".$bq;


$sql = "UPDATE users SET Doubt_ID_A = '$Doubt_ID' WHERE User_ID = '$User'";
if(mysqli_query($conn, $sql))
{
	//echo "done2";
}
$afg=mysqli_query($conn,"SELECT Doubt_ID_Q FROM rank WHERE User_ID=$User");
$row = mysqli_fetch_array($afg);
$dq = $row['Doubt_ID_Q']+1;
$afg=mysqli_query($conn,"UPDATE rank SET Doubt_ID_Q=$dq WHERE User_ID=$User");


?>