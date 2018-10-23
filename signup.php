<html>
<head>

<link rel="stylesheet" type="text/css" href="style1.css"/>
<style>

#book{
	
	margin-top:130px;
}

#font_style{
	font-size:25px;
	font-style:italic;
	color:#A80000;
	
}
#font_style1{
	font-size:20px;
	font-style:italic;
	color:blue;
	
}
#bookstyle{
font-style:italic;
font-size:18px;
font-color:white;

}
#bookform{
background-color:#A80000;
margin-top:40px;
margin-left:450px;
border-radius:10px;
margin-right:430px;

}
</style>
</head>

<body>

<div id="portion">

<div  class="header" id="header_name">Motel Royal </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
<ul id="header_ul" class="header" >
  
<li id="header_li"><a id="header_links" href="a.php">Home</a></li>
 
 <li id="header_li"><a id="header_links" href="gallery.php">Gallery</a></li>
 
 <li id="header_li"><a id="header_links" href="facc.php">Facilitites</a></li>
 
 <li id="header_li"><a id="header_links" href="booking.php">Booking</a></li>
 
<li id="header_li"><a id="header_links" href="motell.php">Contact</a></li>
 
</ul>
</div>

</div>


<div id="book">

<?php 
$msg="";
$name=$_GET['name'];
$surname=$_GET['surname'];
$username=$_GET['username'];
$password=$_GET['password'];
$contact=$_GET['contact'];
$taken=1;

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("royal") or die(mysql_error());
$query1= "Select username from user";
$result=mysql_query($query1);
while($row= mysql_fetch_array($result)){

if($username == $row['username'])
$taken=2;
}
if($taken==1){
$query  ="insert into user (name,surname,username,password,contact)
values ('$name','$surname','$username','$password','$contact')";
$result=mysql_query($query);

echo "<pre>      <font id=font_style>Welcome $username</font></pre>";
echo "<br><br>";
echo "<pre>                                                       <font id=font_style1><B>Please enter the booking details</B></font></pre>";
?>




<form name="form" method="GET" action="details.php">
<input type="hidden" name="username" value="<?php echo "$username"; ?>">
<input type="hidden" name="action" value="1">


<!--
<font size="50px"><b>Login</b></font>
-->
<!--       <font id="bookstyle"><font color=black>Please enter the required fields</font></font>         -->
<div id="bookform">

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=white>Select Number Of Rooms</font>
<select name="rooms">
	<option value="1">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
	<option value="5">5
	<option value="6">6
	<option value="7">7
	<option value="8">8
	<option value="9">9
	<option value="10">10
</select>
<br><br>
<font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Number Of Days</font>
&nbsp;&nbsp;&nbsp;<select name="days">
	<option value="1">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=white>Select The Date</font>
&nbsp;&nbsp;&nbsp;
<select name="month">
	
	<option value="10">October
	<option value="11">November
	<option value="12">December
</select>
<select name="day">
	<option value="1">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
	<option value="5">5
	<option value="6">6
	<option value="7">7
	<option value="8">8
	<option value="9">9
	<option value="10">10
	<option value="11">11
	<option value="12">12
	<option value="13">13
	<option value="14">14
	<option value="15">15
	<option value="16">16
	<option value="17">17
	<option value="18">18
	<option value="19">19
	<option value="20">20
	<option value="21">21
	<option value="22">22
	<option value="23">23
	<option value="24">24
	<option value="25">25
	<option value="26">26
	<option value="27">27
	<option value="28">28
	<option value="29">29
	<option value="30">30
	<option value="31">31
</select>
<select name="year">
	<option value="2016">2016

</select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=white>Enter your password</font>
<input type="password" id="pass" name="password"  placeholder= &nbsp;&nbsp;&nbsp;password required>
<br><br>
<pre>                       <input type="submit" name="submit" value="Submit" style="width:100px;height:30px;background-color:white"></pre> 
<br>
</center></pre>
          


</form>
</div>






<?php
}
else
echo "Username already taken .. please sign up again";

2?>


</div>
</body>
</html>
