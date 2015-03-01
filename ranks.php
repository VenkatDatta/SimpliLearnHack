<?php



$con=mysqli_connect("localhost","root","","Kernel");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    }
        echo "<html><table style=\"width:100%\" border=\"1\">";
        $result = mysqli_query($con,"SELECT User_Name,Rank FROM users ORDER BY Rank ");

         while($row = mysqli_fetch_array($result)) {
        $user=$row['User_Name'];
        //$pass=$row['PassWord'];
        //$id=$row['User_ID'];
        $rank=$row['Rank'];
       
        func($user,$rank);

    }
    function func($x,$y)
    {
    	echo "<tr><td>".$x."</td>";
    	echo "<td>".$y."</td></tr>";

    }
    echo "</table></html>";

        ?>
        