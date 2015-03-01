<?php
$bans = $_POST['B_Answer'];
$bq = $_POST['B_Question'];
$User = $_POST['User'];
$TimeStamp = $_POST['TimeStamp'];
$Doubt_ID = $_POST['Doubt_ID'];

$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password,"kernel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Perform queries

$sql = "INSERT INTO doubt_id (Doubt_ID,Question,Answer,Upvotes,User_ID,TimeStamp) VALUES ('$Doubt_ID','$bq','$bans','0','$User',$TimeStamp)";
if(mysqli_query($conn, $sql))
{
	echo "done1";
}



$sql = "SELECT Doubt_ID_A FROM users WHERE User_ID = '$User'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$dans = $row['Doubt_ID_A'];
$newdans = $dans.",".$Doubt_ID;


$sql = "UPDATE users SET Doubt_ID_A = '$newdans' WHERE User_ID = '$User'";
if(mysqli_query($conn, $sql))
{
	echo "done2";
}


$afg=mysqli_query($conn,"SELECT Doubt_ID_A FROM rank WHERE User_ID=$User");
$row = mysqli_fetch_array($afg);
$dq = $row['Doubt_ID_A']+1;
$afg=mysqli_query($conn,"UPDATE rank SET Doubt_ID_A=$dq WHERE User_ID=$User");


?>