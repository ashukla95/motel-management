<!DOCTYPE html>

<html>

<head>


<style>
#main_page_desc{
margin-top:50px;
font-family:microsoft JhengHei;
color:#383838;
display:inline-block;
}
#slide
{
margin:-8px;
}
#footer{
background:#A80000;
color:white;
position:static;
bottom:0px;
margin-left:-14px;
margin-bottom:-10px;
margin-right:-9px}

#slide_data{
position:absolute;
top:800px;
background:black;
margin-left:-10px;
font-size:60px;
margin-top:-100px;
height:80px;
width:101%;
color:white;
opacity:.8;
text-align:center;

}
</style>
<script src="js/slider.js"></script>
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



<img src="main2.jpg" id="slide" width="102%" height="800" />
<div id="slide_data" ></div>
<script type="text/javascript">

//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
document.getElementById("slide_data").innerHTML = text[step]
 if (step<7)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",3000)
}

slideit()
</script>

<div id="main_page_desc" style="width:65% "> <h3 style="color:#A80000" >Welcome to the grandeur of Motel ROYAL, a Singapore Motel by the park.</h3><br>
Discover the vibrant energy of Singapore at this four star motel in the Balestier , voted the Best Mid Range hotel by travel professionals in 25th Annual TTG Travel Awards 2014. The Royal Singapore motel offers Contemporary amenities, modern even venues and a unique motel-by-th-park experience. Our property exudes international apppeal for both business leisure travellers. From dining to scenic views of the park, you can rest,revive and restore in this charmimg motel, minutes away from the city's bustle yet close enough to modern conveniences.<br>
<br>
You do your thing, leave the rest to us.<br></div>
<div id="main_page_desc" style="margin-left:50px;margin-top:30px " ><img src="offers1.jpg" ></img></div>
<br><br><br><br><br><br><br><br><br><br><br>

<div id ="footer"><center>�2013 Motel Royal at Zhongshan Park. All rights reserved. This hotel is independently owned by HH Properties Pte. Ltd.</center></div>




</body>

</html>