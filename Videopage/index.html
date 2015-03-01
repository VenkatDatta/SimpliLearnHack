<?php
$servername = "localhost";
$username = "root";
$password = "";
$video = $_GET["param"];

$course = substr($video, 3,1);// A
$vidno = substr($video,4,2);// 01
$doubtg = strtoupper ($course)."V".$vidno."_0";
$userid = $_GET["param2"];

// Create connection
$conn = new mysqli($servername, $username, $password,"kernel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Perform queries
$reg = strtoupper ($course)."V".$vidno."%";

$sql = "SELECT Count(DISTINCT Doubt_ID) AS c FROM doubt_table WHERE Doubt_ID LIKE '$reg'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
        $n = $row['c'];
    }
$t = array();
$q = array();
$ans = array();
$do = array();
$user = array();
array_push($user, $userid);
$no = array();
array_push($no, $n);
array_push($no, $doubtg);

for ($x = 1; $x <= $n; $x++) {
    $doubt = $doubtg."$x";
    
    
    $sql = "SELECT Doubt_ID,Question,Answer,TimeStamp FROM doubt_table WHERE Upvotes = (SELECT Max(Upvotes) FROM `doubt_table` WHERE Doubt_ID = '$doubt') AND Doubt_ID = '$doubt'";
    $result = mysqli_query($conn, $sql);
    if (true) {
        // output data of each row
        while($row = mysqli_fetch_array($result)) {
            $a = $row['Doubt_ID'];
            $b = $row['TimeStamp'];
            $c = $row['Question'];
            $d = $row['Answer'];
            
            
            $sql = "INSERT INTO $video (Doubt_ID,TimeStamp,B_Question,B_Answer) VALUES ('$a','$b','$c','$d')";
            
            if (mysqli_query($conn, $sql)) {

                echo "New record created successfully";
                array_push($t, $row['TimeStamp']);
                array_push($q, $row['Question']);
                array_push($ans, $row['Answer']);
                array_push($do, $row['Doubt_ID']);


            } else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    } else {
        echo "0 results";
    }
    
}
// finished inserting all the best q&a for a particular video;
// start query into video table and put time stamp in array

// $t $q $a is the array which has to be sent to .js
echo json_encode($t);
echo json_encode($q);
echo json_encode($ans);
echo json_encode($do);
echo json_encode($user);
echo json_encode($no);



mysqli_close($conn);
?> 



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./dialog-polyfill.css" />
    <script src="./dialog-polyfill.js"></script>

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    
     <style type="text/css">
    /*! normalize.css v2.1.3 | MIT License | git.io/normalize */

/* ==========================================================================
   HTML5 display definitions
   ========================================================================== */

/**
 * Correct `block` display not defined in IE 8/9.
 */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
    display: block;
}

/**
 * Correct `inline-block` display not defined in IE 8/9.
 */

audio,
canvas,
video {
    display: inline-block;
}

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */

audio:not([controls]) {
    display: none;
    height: 0;
}

/**
 * Address `[hidden]` styling not present in IE 8/9.
 * Hide the `template` element in IE, Safari, and Firefox < 22.
 */

[hidden],
template {
    display: none;
}

/* ==========================================================================
   Base
   ========================================================================== */

/**
 * 1. Set default font family to sans-serif.
 * 2. Prevent iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */

html {
    font-family: sans-serif; /* 1 */
    -ms-text-size-adjust: 100%; /* 2 */
    -webkit-text-size-adjust: 100%; /* 2 */
}

/**
 * Remove default margin.
 */

body {
    margin: 0;
}

/* ==========================================================================
   Links
   ========================================================================== */

/**
 * Remove the gray background color from active links in IE 10.
 */

a {
    background: transparent;
}

/**
 * Address `outline` inconsistency between Chrome and other browsers.
 */

a:focus {
    outline: thin dotted;
}

/**
 * Improve readability when focused and also mouse hovered in all browsers.
 */

a:active,
a:hover {
    outline: 0;
}

/* ==========================================================================
   Typography
   ========================================================================== */

/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari 5, and Chrome.
 */

h1 {
    font-size: 3em;
    margin: 0.67em 0;
}

/**
 * Address styling not present in IE 8/9, Safari 5, and Chrome.
 */

abbr[title] {
    border-bottom: 1px dotted;
}

/**
 * Address style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
 */

b,
strong {
    font-weight: bold;
}

/**
 * Address styling not present in Safari 5 and Chrome.
 */

dfn {
    font-style: italic;
}

/**
 * Address differences between Firefox and other browsers.
 */

hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0;
}

/**
 * Address styling not present in IE 8/9.
 */

mark {
    background: #ff0;
    color: #000;
}

/**
 * Correct font family set oddly in Safari 5 and Chrome.
 */

code,
kbd,
pre,
samp {
    font-family: monospace, serif;
    font-size: 1em;
}

/**
 * Improve readability of pre-formatted text in all browsers.
 */

pre {
    white-space: pre-wrap;
}

/**
 * Set consistent quote types.
 */

q {
    quotes: "\201C" "\201D" "\2018" "\2019";
}

/**
 * Address inconsistent and variable font size in all browsers.
 */

small {
    font-size: 80%;
}

/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

/* ==========================================================================
   Embedded content
   ========================================================================== */

/**
 * Remove border when inside `a` element in IE 8/9.
 */

img {
    border: 0;
}

/**
 * Correct overflow displayed oddly in IE 9.
 */

svg:not(:root) {
    overflow: hidden;
}

/* ==========================================================================
   Figures
   ========================================================================== */

/**
 * Address margin not present in IE 8/9 and Safari 5.
 */

figure {
    margin: 0;
}

/* ==========================================================================
   Forms
   ========================================================================== */

/**
 * Define consistent border, margin, and padding.
 */

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}

/**
 * 1. Correct `color` not being inherited in IE 8/9.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */

legend {
    border: 0; /* 1 */
    padding: 0; /* 2 */
}

/**
 * 1. Correct font family not being inherited in all browsers.
 * 2. Correct font size not being inherited in all browsers.
 * 3. Address margins set differently in Firefox 4+, Safari 5, and Chrome.
 */

button,
input,
select,
textarea {
    font-family: inherit; /* 1 */
    font-size: 100%; /* 2 */
    margin: 0; /* 3 */
}

/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */

button,
input {
    line-height: normal;
}

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Chrome, Safari 5+, and IE 8+.
 * Correct `select` style inheritance in Firefox 4+ and Opera.
 */

button,
select {
    text-transform: none;
}

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */

button,
html input[type="button"], /* 1 */
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button; /* 2 */
    cursor: pointer; /* 3 */
}

/**
 * Re-set default cursor for disabled elements.
 */

button[disabled],
html input[disabled] {
    cursor: default;
}

/**
 * 1. Address box sizing set to `content-box` in IE 8/9/10.
 * 2. Remove excess padding in IE 8/9/10.
 */

input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box; /* 1 */
    padding: 0; /* 2 */
}

/**
 * 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
 *    (include `-moz` to future-proof).
 */

input[type="search"] {
    -webkit-appearance: textfield; /* 1 */
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box; /* 2 */
    box-sizing: content-box;
}

/**
 * Remove inner padding and search cancel button in Safari 5 and Chrome
 * on OS X.
 */

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

/**
 * Remove inner padding and border in Firefox 4+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/**
 * 1. Remove default vertical scrollbar in IE 8/9.
 * 2. Improve readability and alignment in all browsers.
 */

textarea {
    overflow: auto; /* 1 */
    vertical-align: top; /* 2 */
}

/* ==========================================================================
   Tables
   ========================================================================== */

/**
 * Remove most spacing between table cells.
 */

table {
    border-collapse: collapse;
    border-spacing: 0;
}

html, body {
  width: 100%;
  height: 100%;
}
body {
  background-color: #f3f3f3;
  margin: 0;
  display: table;
  position: relative;

}
.demo-wrapper {
  text-align: center;
  display: table-cell;
  vertical-align: middle;
  margin: auto;
  width: 100%;
  height: 100%;

}
.html5-dialog {
  width: 300px;
  margin: 0 auto;
  border-radius: 3px;
  margin-bottom: 20px;
}
.html5-dialog dialog {
  top:50px;
  width: 500px;
}
.html5-dialog button#show {
  position: relative;
  background-color: #16a085;
  border-radius: 3px;
  color: #fff;
  border-width: 0;
  width: 200px;
  height: 50px;
  line-height: 50px;
}
.html5-dialog button#exit {
  background-color: #c0392b;
  border-radius: 3px;
  color: #fff;
  border-width: 0;
  width: 80px;
  height: 30px;
  line-height: 28px;
}
.html5-dialog button#show:hover {
  background-color: #1abc9c;
}
.html5-dialog button#exit:hover {
  background-color: #e74c3c;
}
.html5-dialog dialog::backdrop {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
}

</style>

<style type="text/css">


/* Stylesheet */


/* Imports */

@import url(animate.css);

/* Selections */

::selection {
  color: #fff;
  text-shadow: none;
  background: #444;
}

::-moz-selection {
  color: #fff;
  text-shadow: none;
  background: #444;
}

/* Basics */

html, body {
  width: 100%;
  height: 100%;
  font-family: "Helvetica Neue", Helvetica, sans-serif;
  
  -webkit-font-smoothing: antialiased;
  
}

#container {
  position: fixed;
  width: 340px;
  height: 280px;
  top: 50%;
  left: 50%;
  margin-top: -140px;
  margin-left: -170px;
  background: #fff;
  border-radius: 3px;
  border: 1px solid #ccc;
  box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
  -webkit-animation-name: bounceIn;
  -webkit-animation-fill-mode: both;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: bounceIn;
  -moz-animation-fill-mode: both;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: 1;
  -moz-animation-timing-function: linear;
  animation-name: bounceIn;
  animation-fill-mode: both;
  animation-duration: 1s;
  animation-iteration-count: 1;
  animation-timing-function: linear;
}

form {
  margin: 0 auto;
  margin-top: 20px;
}

label {
  color: #555;
  display: inline-block;
  margin-left: 18px;
  padding-top: 10px;
  font-size: 14px;
}

p a {
  font-size: 11px;
  color: #aaa;
  float: right;
  margin-top: -13px;
  margin-right: 20px;
  -webkit-transition: all .4s ease;
  -moz-transition: all .4s ease;
  transition: all .4s ease;
}

p a:hover {
  color: #555;
}

input {
  font-family: "Helvetica Neue", Helvetica, sans-serif;
  font-size: 12px;
  outline: none;
}

input[type=text],
input[type=password] {
  color: #777;
  padding-left: 10px;
  margin: 10px;
  margin-top: 12px;
  margin-left: 18px;
  width: 290px;
  height: 35px;
  border: 1px solid #c7d0d2;
  border-radius: 2px;
  box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
  -webkit-transition: all .4s ease;
  -moz-transition: all .4s ease;
  transition: all .4s ease;
}

input[type=text]:hover,
input[type=password]:hover {
  border: 1px solid #b6bfc0;
  box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
}

input[type=text]:focus,
input[type=password]:focus {
  border: 1px solid #a8c9e4;
  box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
}

#lower {
  background: #ecf2f5;
  width: 100%;
  height: 69px;
  margin-top: 20px;
  box-shadow: inset 0 1px 1px #fff;
  border-top: 1px solid #ccc;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

input[type=checkbox] {
  margin-left: 20px;
  margin-top: 30px;
}

.check {
  margin-left: 3px;
  font-size: 11px;
  color: #444;
  text-shadow: 0 1px 0 #fff;
}

input[type=submit] {
  float: right;
  margin-right: 20px;
  margin-top: 20px;
  width: 80px;
  height: 30px;
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  background-color: #acd6ef; /*IE fallback*/
  background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
  background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
  background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
  border-radius: 30px;
  border: 1px solid #66add6;
  box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
  cursor: pointer;
}

input[type=submit]:hover {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
  background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
  background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
}

input[type=submit]:active {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
  background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
  background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
}








</style>
<script type="text/javascript">
    var t = <?php echo json_encode($t) ?>;
    var q = <?php echo json_encode($q) ?>;
    var ans = <?php echo json_encode($ans) ?>;
    var doubt = <?php echo json_encode($do) ?>;
    var User = <?php echo json_encode($user) ?>;
    var num = <?php echo json_encode($no) ?>;

    
    </script>










    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">simplilearn</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div> -->
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        document.getElementById('doubtBox').style.visibility = 'hidden';
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
    
        event.target.playVideo();
       
        

        startTime();

      }
      var i = 0;
      var dialog
      function startTime() {
      
      var m = player.getCurrentTime(); 
      var m2 = m.toString();
      
      var m1 =  m2.indexOf(".");
      var res = parseInt(m2.slice(0,m1));
      //alert(m2+" res"+res+"  "+m1);
       dialog = document.querySelector('dialog');
    dialogPolyfill.registerDialog(dialog);
      document.getElementById('timer').innerHTML = res;
      //var y = t[i].indexOf(":");
         // var min_s = t[i].slice(0,y);
         // var  min = parseInt(min_s)*60;
         // var sec_s = t[i].slice(y+1);
         // var secs = parseInt(min+sec_s);
         var secs = parseInt(t[i]);
          //alert(secs + " " + res);
            //dialog.showModal();
            if(res === secs){
             //  alert("works");
              document.getElementById('qes').innerHTML = q[i];
              pauseVideo();

            dialog.showModal();
            //alert("works");
          
            i++;
            }
            
      
      var t1 = setTimeout(function(){startTime()},1000);
      }
      var bans;

      function closeD(){
        document.getElementById('ans').innerHTML = ans[i];
        bans = document.getElementById('ba').value;

        makeRequest();
      }
      function closeD1(){
        document.getElementById('ans').innerHTML = ans[i];

      }
      function close1(){
        dialog.close();
        player.playVideo();
      }
      function getXmlHttpObject()
        {
            var xmlhttp;
            if(window.XMLHttpRequest)
            {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
                else
            {
            // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            } 
        return xmlhttp;
        }
        function makeRequest()
        {
        
        
        xmlHTTP=getXmlHttpObject();
        xmlHTTP.open("POST","http://localhost/simplihack/videoSend.php",true);
        xmlHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        xmlHTTP.onreadystatechange = function() { if(xmlHTTP.readyState == 4 && xmlHTTP.status == 200) { var return_data = xmlHTTP.responseText; 
          alert(return_data);
         } }  
        xmlHTTP.send("B_Answer="+bans+"&B_Question="+q[i]+"&User="+User+"&TimeStamp="+t[i]+"&Doubt_ID="+doubt[i]);
        //window.open("videoSend.php");
        
        }
        var fdoubt = num[1]+(num[0]+1);


        function makeRequest2()
        {
        
        
        xmlHTTP=getXmlHttpObject();
        xmlHTTP.open("POST","http://localhost/simplihack/video2Send.php",false);
        xmlHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        xmlHTTP.onreadystatechange = function() { if(xmlHTTP.readyState == 4 && xmlHTTP.status == 200) { var return_data = xmlHTTP.responseText;
          alert(return_data);
         } }  
        xmlHTTP.send("Question="+askQuestion+"&User="+User+"&TimeStamp="+document.getElementById('timer').innerHTML+"&Doubt_ID="+fdoubt);
        //window.open("video2Send.php");
        
        }
      

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      
      function onPlayerStateChange(event) {
       
      }
      function pauseVideo() {
        player.pauseVideo();
      }
      var askQuestion;

      function openDoubtBox () {
        player.pauseVideo();
        document.getElementById('doubtBox').style.visibility = 'visible';

      }
      function closeDoubtBox () {
        askQuestion = document.getElementById('qes1').value;

        makeRequest2();
        //window.location.href = "localhost/kernel/video2Send.php?Question="+askQuestion+"&User="+User+"&TimeStamp="+document.getElementById('timer').//innerHTML+"&Doubt_ID="+fdoubt;

        player.playVideo();

        document.getElementById('doubtBox').style.visibility = 'hidden';

      }
    </script>

                   <!-- <img class="img-responsive" src="http://placehold.it/800x300" alt="">-->
                    <div class="caption-full">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Introduction</a>
                        </h4>
                        <p>Geting started</a></p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p>Android is a mobile operating system (OS) based on the Linux kernel and currently developed by Google. With a user interface based on direct manipulation, Android is designed primarily for touchscreen mobile devices such as smartphones and tablet computers, with specialized user interfaces for televisions (Android TV), cars (Android Auto), and wrist watches (Android Wear). The OS uses touch inputs that loosely correspond to real-world actions, like swiping, tapping, pinching, and reverse pinching to manipulate on-screen objects, and a virtual keyboard. Despite being primarily designed for touchscreen input, it also has been used in game consoles, digital cameras, regular PCs (e.g. the HP Slate 21) and other electronics.</p>
                    </div>

                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                
            </div>

        </div>

    </div>
    <!-- /.container -->
    <div id="player"></div>
    <div id="timer"></div>
<div class="demo-wrapper">

  <div class="html5-dialog">
    <dialog id="window">
    <!--  <h3>Register Form</h3> -->
      <form>
        <label for="qes">Question :</label>        
         <label id = "qes"></label>
                <br>
                <label for="ans">Answer :</label>
                <input type="text" id = "ba" name="answer">
                <br>
                <label for="ans">Best Answer :</label>
                <label id="ans"></label>
                
<br> 
      </form>
      
      <button id="exit" onclick="closeD()">Continue after answering</button>
      <br>
      <button id ="exit1" onclick="closeD1()">Continue without answering</button>
      <br>
      <button id = "aexit" onclick = "close1()">Exit</button>
    </dialog>
    <!-- <button id="show" onclick="checkForm();" >Submit </button> -->
  </div>
</div>




<div id = "doubtBox" class="demo-wrapper">
  <div class="html5-dialog">
    
    <!--  <h3>Register Form</h3> -->
      <form >
        <label for="qes">Question :</label>        
         <input type ="text" id ="qes1"></input>
                <br>
                
     
      
      
      <button id = "aexit" onclick = "closeDoubtBox(); return false;" type="submit">Ask and Exit</button>
     </form>
    
  </div>
</div>
<div><button id="show" onclick="openDoubtBox()" >Ask a doubt now!</button> 
</div>



    <div class="container">

        <hr>

        <!-- Footer -->
        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
