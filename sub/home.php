<?php 
session_start();?>
<html>
<head>
<title></title>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
  
  
  
}
.bg{
background-color:black;
text-align : center;

}

a
{
text-decoration : none;
color : white;
font-size:140%;
}



.hoimage
{
 display: block;
 margin-left: auto;
 margin-right: auto;
 width:100%;


}
a:hover
{
color:	#D4AF37;
}


.welcome
{
text-align : center;
font-size:large;

}


hr.rule {
  border: 4px solid #925C14;
  border-radius: 1%;
  width : 50%;
}

ul{
list-style-type: none;
}


.table 
{
background-color : black;
color : white;

font-family : verdana;
font-size: small;


}

ul#inline li
{
display : inline;
}





div#phone a{
color: blue;
font-size:medium;

}

#t
{
display: flex;
flex-direction: row;
}



  
body{
background-image : url("https://i.pinimg.com/originals/d3/83/df/d383df8cc409f595f3a48312222020a4.jpg");
background-repeat: no-repeat;
background-position : center;
background-size: cover;
height :100%;
box-sizing : border-box;

}
body {
  font-family: Arial;
}

.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 600px;
}

.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}



.sticky{
 position: -webkit-sticky;
position: sticky;
top :0;
background-color : black;
text-align : center
}




</style>
</head>
<body>

<div class="bg">
<img src="../images/logo.png" class="center">
</div>
<div class="sticky">
<a href="../index.html" > Home </a>&emsp;&emsp;<a href="about.html" >About</a>&emsp;&emsp;<a href="rooms.html" > Rooms </a>&emsp;&emsp;<a href="amenties.html" >Amenities</a>&emsp;&emsp;<a href="dining.html" > Dining</a>&emsp;&emsp;<a href="contact.html" > Contact Us</a>&emsp;&emsp;<a href="signin.php"> Sign in </a>&emsp;&emsp;<a href="signin.php">Logout </a>
</div>


<body>
<h1> welcome <?php echo $_SESSION['username']."!!" ?> </h1>
 congratulation you have got this coupon!!


<div class="coupon">
  <div class="container">
    <h3> HOTEL SERENA </h3>
  </div><img src="https://www.soegjobs.com/wp-content/uploads/2016/04/Bellagio-Las-Vegas-Most-Beautiful-Hotels-in-the-world.jpeg" alt="img" width="600" height="400">
  <div class="container" style="background-color:white">
  
    <h2><b>50% OFF on your stay </b></h2> 
    <p> This coupon can be availed for your foods , rooms  and much more!!!! <br>
	what are you waiting for .......</p>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">BOH232</span></p>
    <p class="expire">Expires: june 03, 2020</p>
  </div>
</div>
</body>
</html>