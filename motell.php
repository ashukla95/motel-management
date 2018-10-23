<html>




<head>
<title> contacts </title>
<link rel="stylesheet" type="text/css" href="style27.css"/>
<link rel="stylesheet" type="text/css" href="style1.css"/>
</head>






<body >

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





<img src="ram.jpg" style="margin:-10">
<br>
<br>
<br>
<br>
<p style="color:#A80000; font-size:40px;font-weight:bold ;font-family:microsoft jhenghei ">RESERVATIONS</p>


<center><h2 style="color:#A80000;font-family:microsoft jhenghei;"> CONTACT DETAILS</h2></center>
<hr width="70%">
<br>
<br>



























<div id="nav">

		<ul >
			<li>
				<h2>
					Room Reservations</h2>
				Tel: +65 6808 6838<br>
				Fax: 65 6808 6839<br>
				Email: <a href="mailto:reservations@ramada-dayshotelssingapore.com" 				rel="nofollow"><font color=#A80000>reservations@hotelroyal-dayshotelssingapore.com</font></a></li>
			<li>
				<h2>
					Meetings and Events Enquiries</h2>
				Tel: (65) 6808 6848<br>
				Fax: (65) 6808 6909<br>
				Email: <a href="mailto:events@ramadasingapore.com" 							rel="nofollow"><font color=#A80000>events@hotelroyalsingapore.com</font></a></li>
			<li>
				<h2>
					Room Sales</h2>
				Tel: 65 6808 6806<br>
				Fax: 65 6808 6809<br>
				Email: <a href="mailto:sales@ramada-dayshotelssingapore.com" 							rel="nofollow"><font color=#A80000>sales@hotelroyal-dayshotelssingapore.com</font></a></li>
		</ul>
	





</div>





<div id="navv">
<ul>
	
			<li>
				<h2>
					Flavours At Zhongshan Park</h2>
				Tel: 65 6808 6846<br>
				Email: <a href="mailto:flavours@ramadasingapore.com" 							rel="nofollow"><font color=#A80000>flavours@hotelroyalsingapore.com</font></a>
			</li>
			<li>
				<h2>
					Job Opportunities and Human Resources</h2>
				Email: <a href="mailto:recruit@ramada-dayshotelssingapore.com" 						rel="nofollow"><font color=#A80000>recruit@hotelroyal-dayshotelssingapore.com</font></a>
			</li>
			<li>
				<h2>
					Media Enquiries</h2>
				Email: <a href="mailto:marketing@ramada-dayshotelssingapore.com" 						rel="nofollow"><font color=#A80000>marketing@hotelroyal-dayshotelssingapore.com</font></a>
			</li>
		</ul>
	
 </div>


<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<h2 style="color:#A80000;font-family:microsoft jhenghei"><center>REVIEWS</center></h2>
<hr width="90%">

<form id="form" method="GET" action="validate.php">
<br>
<div id="contact">
  <div id="content1">
    Name<br>
	<input type=text  name="name" value=" " required style="border-radius:2px solid #FF4444;"><br><br>
	Email<br>
	<input type=text  name="email" value="" required><br>

   </div>
  <div id="content2">
  Phone<br>
	<input type=text name="phone" value=" " required><br><br>



   </div>
  <div id="content3">
   Reviews<br>
   <textarea name="comments" value=""style="height:80px;
        width:170px;
        max-height:80px;
        max-width:170px;"></textarea>
   </div>

</div>





<center> <input type="submit" name="submit" value="submit"></center>





</form>
<br>

<BR><br><br>
<BR><br><br>




<?php 
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("royal") or die(mysql_error());
$query1= "Select * from query";


echo "<hr>";
$result=mysql_query($query1);
echo "<table>";
while($row= mysql_fetch_array($result)){

echo "<tr>";
echo "";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <td><font color=red size=5px;><B> " .$row['name']. "";
echo "<br>";
echo "</B></font>";
echo"</tr>";

echo "<tr>";
echo "<td> <font color=black size=3px;><B>".$row['comments']. "";

echo "</B></font>";
echo "</tr>";
echo "<td><hr>";
echo "<br>";

}
echo "</table>";
?>
</body>
</html>