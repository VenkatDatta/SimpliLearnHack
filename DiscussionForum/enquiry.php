
<?php
	$con=mysqli_connect("localhost","root","","kernel");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    }
        $result = mysqli_query($con,"SELECT * FROM course_table");
    while($row = mysqli_fetch_array($result)) {
        $COURSE_ID=$row['COURSE_ID'];
        $Name=$row['NAME'];
        echo"<div id='content'>
      <h4>$Name</h4>";
           
           $con1=mysqli_connect("localhost","root","","kernel");
     if(mysqli_connect_errno()){
         echo "ERROR ".mysqli_connect_error();
     }
    
        $result1 = mysqli_query($con,"SELECT * FROM doubt_table");
       $ad = array('');
       $up = array('');
       $i=0;
    while($row = mysqli_fetch_array($result1)) {
        $doubt_id=$row['Doubt_ID'];
        $Question=$row['Question'];
        $Answer=$row['Answer'];
        $Upvotes=$row['Upvotes'];
        $User_ID=$row['User_ID'];
        array_push($ad, $Answer);
        array_push($up, $Upvotes);
        
       
        
        if (preg_match("/".$COURSE_ID."/", $doubt_id)){
          $ads=$up[$i]+1;
        echo "
      <dl>
        <dt>Question :$Question  <button id='".$ad[$i]."' onclick=\"alert($ads);\" name='UpVotes'>".$up[$i]."</button></dt>
        <dd>Answer : $Answer </dd>
        <!-- <dt>Intrepid</dt>
        <dd>Courageous. <em>Harry's thinks he's intrepid, but actually, he's only stupid.</em></dd>
        <dt>Inconsequential</dt>
        <dd>Unimportant. <em>The fact that you don't know the meaning of inconsequential is <del>in</del>consequential. </em></dd>
        <dt>Benevolent</dt>
        <dd>Good/nice/generous. <em>Will the benevolent god please raise their hand?</em></dd>
        <dt>Fabricated</dt>
        <dd class='last'>Made-up. <em>Lies are but fabricated truths.</em></dd> -->
      </dl>
      <!-- <h6>Other Stuff</h6>
      <blockquote>
        <p>I can't help it if people want to go to hell. <cite>&mdash; <abbr title='Invisible Pink Unicorn'>IPU</abbr></cite></p>
      </blockquote>
      <pre><code>This is unlike any code I've ever seen in my entire life. Well, minus my dreams, maybe.</code></pre> -->
      ";
  //echo $row['Name'] . " " . $row['Time'];
 // echo "<br>";
    }
    //$n=count($ad);
     //echo "<script>function()
      //{
       // for(var i=0;i<$n;i++){
         // if(document.getElementById('$ad/[i/]').checked){
           //   alert('$up/[i/]');
          //}
        //}
   $i++;
   
   // }();</script>";
  }
  echo "<script>
   function(var x){
    alert(x+1);
   }
   

   </script>";

}

?>
