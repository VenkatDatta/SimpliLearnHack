<html>
<?php
     
$server     = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'dsj';
 
$con=mysqli_connect("localhost","root","","dsj");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    }


    //first get lat long of user in focus
    $result = mysqli_query($con,"SELECT Latitude,Longitude from user where ID=1 "); //INSTEAD OF 1 ENTER USER ID
        while($row = mysqli_fetch_array($result)) {
        $ULatitude=$row['Latitude'];
        $ULongitude=$row['Longitude'];
           }






//this is for all other users
        $result2 = mysqli_query($con,"SELECT ID,Latitude,Longitude from user");
        while($row = mysqli_fetch_array($result2)) {
        $Latitude=$row['Latitude'];
        $Longitude=$row['Longitude'];
        $Userid=$row['ID'];
        echo "check1";
        if($Latitude<$ULatitude+5&&$Latitude>$ULatitude-5&&$Longitude<$ULongitude+5&&$Longitude>$ULongitude-5)
        {
        	//in the range
        	//plot this on the graph
        	echo "<script type=\"text/javascript\">
        	//<![CDATA[
         
        var map;
         
       
        var center = new google.maps.LatLng($Latitude, $Longitude);
         
        function init() {
             
            var mapOptions = {
                zoom: 13,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
             
            map = new google.maps.Map(document.getElementById(\"map_canvas\"), mapOptions);
             
            var marker = new google.maps.Marker({
                map: map, 
                position: center,
            });
        }
        //]]>
        </script>
        	";
        }

    }


?>
 <body onload="init();">
         
        <h1>Places to check out in Zagreb</h1>
         
        <section id="sidebar">
            <div id="directions_panel"></div>
        </section>
         
        <section id="main">
            <div id="map_canvas" style="width: 70%; height: 600px;"></div>
        </section>
         
    </body>
</html>