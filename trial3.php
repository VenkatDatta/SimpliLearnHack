  <html>
   <body  >
         
        <h1>Find collaborators near you</h1>
         
        <section id="sidebar">
            <div id="directions_panel"></div>
        </section>
         
        <section id="main">
            <div id="map_canvas" style="width: 70%; height: 600px;"></div>
        </section>
         
    </body>
<?php
          
$server     = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'kernel';
$user_id=$_GET['param'];
$name=$_GET['param1'];
 
$con=mysqli_connect("localhost","root","","kernel");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    }


    //first get lat long of user in focus
    $result = mysqli_query($con,"SELECT Latitude,Longitude from users where User_ID=2 "); //INSTEAD OF 1 ENTER USER ID
        while($row = mysqli_fetch_array($result)) {
        $ULatitude=$row['Latitude'];
        $ULongitude=$row['Longitude'];
        echo " <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>";
        echo "<script type=\"text/javascript\">

            //<![CDATA[
         
        var map;
         
         var Ucenter = new google.maps.LatLng($ULatitude, $ULongitude);
        alert($ULatitude);
        function init1() {
         
            

             
            var mapOptions = {
                zoom: 07,
                center: Ucenter,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
             
            map = new google.maps.Map(document.getElementById(\"map_canvas\"), mapOptions);
              
            
 
          
        
          
          }
        ";
        $result2 = mysqli_query($con,"SELECT User_Name,User_ID,Latitude,Longitude,Course_ID from users");
        echo "init1();";
   
        while($row = mysqli_fetch_array($result2)) {
        $Latitude=$row['Latitude'];
        $Longitude=$row['Longitude'];
        $Userid=$row['User_ID'];
        
        $User_name=$row['User_Name'];
        $course=$row['Course_ID'];
        

        if($Latitude<$ULatitude+5&&$Latitude>$ULatitude-5&&$Longitude<$ULongitude+5&&$Longitude>$ULongitude-5)
        {
            //in the range
            //plot this on the graph
            //echo $User_name;
            

            echo "init($Latitude,$Longitude,'$User_name','$course');";
        }

    }


        echo"function init(x,y,x1,x2){
            


            var infowindow = new google.maps.InfoWindow();

            var content = '<div class=\"infoWindow\">'+
                       '<h>'+x1+'</h>'+'<br>'+x2+
                     '</div>';
        
        var center2 = new google.maps.LatLng(x, y);
        if(x2=='A')
            var pinColor = \"3399FF\";
        else if(x2=='B')
            var pinColor = \"FF0000\";
        else
            var pinColor = \"66FF66\";

         
    var pinImage = new google.maps.MarkerImage(\"http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|\" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
             
            var marker2 = new google.maps.Marker({
                map: map, 
                position: center2,
                icon:pinImage,
            });
  google.maps.event.addListener(marker2, 'click', function() {
            
             infowindow.setContent(content);
            infowindow.open(map,marker2);
            
        });
          
        }
        //]]>
        </script>
            ";
           }






//this is for all other users
        


?>


</html>