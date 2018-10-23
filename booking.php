
<!DOCTYPE html>


<html>


<head>


<link rel="stylesheet" type="text/css" href="style1.css"/>

<style>
#slide
{
margin:-8px;
}
#main_page_desc{
margin-top:50px;
font-family:microsoft JhengHei;
color:#383838;
display:inline-block;
}
#contentform{
width:100%;
	
}

#form{

display:inline-block;
float:left;
margin-left:50px;
border-radius:10px;
margin-top:200px;
font-family:microsoft JhengHei;
color:#f0f0f0;
width:30%;

background:#A80000;
}

#form1{
background:#A80000;
font-family:microsoft JhengHei;
color:#f0f0f0;
	display:inline-block;
	width:40%;
margin-top:200px;
border-radius:10px;
margin-left:150px;

}


#user{

border-radius:10px;
height:35px;
width:300px;

}
#pass{
border-radius:10px;
height:35px;
width:300px;
}

#sub{
height:35px;
width:100px;
border-radius:10px;
}


</style>
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


<img src="booking2.jpg" id="slide" width="102%" height="800" />


<form name="form" method="GET" action="details.php">

<div id="contentform">
<div id="form">


<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
 
&nbsp; 
&nbsp; 

<font size="50px"><b>Login</b></font><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" id="user" name="username" placeholder= &nbsp;&nbsp;&nbsp;Username required>
<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" id="pass" name="password"  placeholder= &nbsp;&nbsp;&nbsp;password required>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
<center> <center> 
<input type="submit" name="submit" value="Submit" style="width:100px;height:30px;background-color:#99CCFF"> 
</center></pre>
          
<input type="hidden" name="action" value="2">
<br>&nbsp;&nbsp;&nbsp;&nbsp;

</form>
</div>

</div>

<div id="form1"><br>

<br> 
&nbsp; 
&nbsp; 
&nbsp;
<font size="50px"><b>Create account</b></font>


<form name="form" method="GET" action="signup.php">

&nbsp;&nbsp;&nbsp;&nbsp;<br> 
&nbsp; 
&nbsp; 
&nbsp;
Personal information (*Indicates required fields)<br><br><br>
  
 
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>Name*</B><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=text name=name placeholder=Name type=text required style="height:30px">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type=text name=surname placeholder=Surname  type=text required style="height:30px"><br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>Choose your username*</B><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=text name=username placeholder=Userame type=text required style="width:363px;height:30px"><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>Choose your Password*</B><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" class="password" name="password" placeholder=Password required style="height:30px;width:363px"> 
&nbsp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>Contact no.*</B><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="contact" placeholder=Contact style="width:363px;height:30px" required><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<pre>                       
<center> <input type="submit" name="submit" value="Submit" style="width:100px;height:30px;background-color:#99CCFF"> 
</center></pre>

</form>

</div>


</div>



</body>

</html>
