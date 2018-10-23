<html>
<head>

<link rel="stylesheet" type="text/css" href="style1.css"/>
<style>
#detail{
	margin-top:140px;
	margin-left:400px;
}
#detailfont{
	font-color:#A80000;
	font-size:18px;
	font-style:italic;
}

#tr{
background-color:#A80000;
cell-padding:15px;
color:white;
}

</style>
</head>

<body>
<div id="portion">

<div  class="header" id="header_name">Hotel Royal </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
<ul id="header_ul" class="header" >
  
<li id="header_li"><a id="header_links" href="a.html">Home</a></li>
 
 <li id="header_li"><a id="header_links" href="gallery.html">Gallery</a></li>
 
 <li id="header_li"><a id="header_links" href="facc.html">Facilitites</a></li>
 
 <li id="header_li"><a id="header_links" href="booking.html">Booking</a></li>
 
<li id="header_li"><a id="header_links" href="motell.html">Contact</a></li>
 
</ul>
</div>

</div>

<?php
$action=$_GET['action'];
$password=$_GET['password'];
$username=$_GET['username'];

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("royal") or die(mysql_error());

$query1= "Select username,password from user";
$result=mysql_query($query1);


$query10="select rooms,username from booking";
$result10=mysql_query($query10);



if($action==1)
{
$days=$_GET['days'];
$day=$_GET['day'];
$rooms=$_GET['rooms'];
$month=$_GET['month'];
$year=$_GET['year'];
while($row= mysql_fetch_array($result))
{if( $row['username']== $username)
if($row['password']==$password)
{
	
while($row= mysql_fetch_array($result10))
{if( $row['username']== $username)
  if($row['rooms']==$rooms)
  {
         $query3="Select * from booking ";
$result2=mysql_query($query3);
echo "<div id=detail>";
echo "<font color=#A80000 size=5px><I>Hello $username</I></font>";
echo "&nbsp;&nbsp;<font color=#A80000 size=5px><I>,Your bookings are:</I></font>";
echo "<br><br><br>";
echo "<table >";
echo "<tr>";
echo "<th width=120px>No. of days</th>";
echo "<th width=120px>Date</th>";
echo "<th width=120px>No. of rooms</th>";
echo "</tr>";
while($row= mysql_fetch_array($result2)){
if($row['username']==$username)
{ 

echo "<table >";
echo "<tr bgcolor=#A80000>";
echo "<td>";
echo "<font color=blue>";
echo $row['days'] ; 
echo "</font>";
echo "</td>";
echo "<td width=120px>";
echo "<font color=blue>";
echo $row['day']. "/" . $row['month'] . "/" . $row['year'];
echo "</font>";
echo "</td>";
echo "<td >";
echo "<font color=blue>";
echo $row['rooms'];
echo "</font>";
echo "</td>";
}}

echo "</div>";
}}}
else{

$query2  ="insert into booking (days,day,month,year,rooms,username)
values ('$days','$day','$month','$year','$rooms','$username')";
$result1=mysql_query($query2);
}}
else 
echo "wrong password";

}
$query3="Select * from booking ";
$result2=mysql_query($query3);



echo "<br><br><br><br><br><br>";


echo "<div id=detail>";
echo "<font color=#A80000 size=5px><I>Hello $username</I></font>";
echo "&nbsp;&nbsp;<font color=#A80000 size=5px><I>,Your bookings are:</I></font>";
echo "<br><br><br>";
echo "<table >";
echo "<tr id=tr>";
echo "<th width=120px>No. of days</th>";
echo "<th width=120px>Date</th>";
echo "<th width=120px>No. of rooms</th>";
echo "</tr>";
while($row= mysql_fetch_array($result2)){
if($row['username']==$username)
{

echo "<table >";
echo "<tr>";
echo "<td width=120px>";
echo "<font color=black><B>";
echo $row['days'] ; 
echo "</B></font>";
echo "</td>";
echo "<td width=120px>";
echo "<font color=black><B>";

echo $row['day']. "/" . $row['month'] . "/" . $row['year'];
echo "</B></font>";

echo "</td>";
echo "<td width=120px>";
echo "<font color=black><B>";
echo $row['rooms'];
echo "</B></font>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</b>";
}
}

echo "</div>";

}



else

{
$query3="Select * from booking ";
$result2=mysql_query($query3);
echo "<div id=detail>";
echo "<font color=#A80000 size=5px><I>Hello $username</I></font>";
echo "&nbsp;&nbsp;<font color=#A80000 size=5px><I>,Your bookings are:</I></font>";
echo "<br><br><br>";
echo "<table >";
echo "<tr>";
echo "<th width=120px>No. of days</th>";
echo "<th width=120px>Date</th>";
echo "<th width=120px>No. of rooms</th>";
echo "</tr>";
while($row= mysql_fetch_array($result2)){
if($row['username']==$username)
{ 

echo "<table >";
echo "<tr bgcolor=#A80000>";
echo "<td>";
echo "<font color=blue>";
echo $row['days'] ; 
echo "</font>";
echo "</td>";
echo "<td width=120px>";
echo "<font color=blue>";
echo $row['day']. "/" . $row['month'] . "/" . $row['year'];
echo "</font>";
echo "</td>";
echo "<td >";
echo "<font color=blue>";
echo $row['rooms'];
echo "</font>";
echo "</td>";
}}

echo "</div>";

}
?>

</body>
</html>