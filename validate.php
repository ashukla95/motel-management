<html>
<head>
<link rel="stylesheet" type="text/css" href="style27.css"/>
<link rel="stylesheet" type="text/css" href="style1.css"/>






<style type="text/css">

p {
   font-family: verdana; 
   font-size: 55px; 
   font-weight: bold; 

   background: #f0f0f0;
   color: red; 

}
</style>
</head>
<body>

<div id="portion">

<div  class="header" id="header_name">Motel Royal </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
<ul id="header_ul" class="header" >
  
<li id="header_li"><a id="header_links" href="a.php">Home</a></li>
 
 <li id="header_li"><a id="header_links" href="gallery1.php">Gallery</a></li>
 
 <li id="header_li"><a id="header_links" href="facc.php">Facilitites</a></li>
 
 <li id="header_li"><a id="header_links" href="booking.php">Booking</a></li>
 
<li id="header_li"><a id="header_links" href="motell.php">Contact</a></li>
 
</ul>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br>
<center><img src = "t.png"></center>

<center><p>FOR YOUR REVIEWS</p><center>




<?php 
$msg="";
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$comments=$_GET['comments'];


mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("royal") or die(mysql_error());

	

if($name  == ""){
$msg  = $msg . "<font  color='red'>pls  enter name<BR></font>" ;
}

if($email  == ""){
$msg  = $msg . "<font  color='red'>pls  enter email<BR><font>" ;
}

if($phone  == ""){
$msg  = $msg . "<font  color='red'>pls  enter contact</font><BR>" ;
}
if($comments  == ""){
$msg  = $msg . "<font  color='red'>pls  enter comments<BR></font>" ;
}


$query  ="insert into query (name,phone,comments,email)
values ('$name','$phone','$comments','$email')";
$result=mysql_query($query);






?>









</body>
</html>