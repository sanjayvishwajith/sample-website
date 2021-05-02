<!doctype html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>hotel serena </title>
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
.about
{
text-align: center;
color: #925C14;
font-size:2vw;



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
.for{
display: flex:
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

.forright
{
text-align : center;
}
.for
{
text-align : center;
}
h1
{
text-align : center 
};

form {
border: 3px solid #f1f1f1;
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
<a href="../index.html" > Home </a>&emsp;&emsp;<a href="about.html" >About</a>&emsp;&emsp;<a href="rooms.html" > Rooms </a>&emsp;&emsp;<a href="amenties.html" >Amenities</a>&emsp;&emsp;<a href="dining.html" > Dining</a>&emsp;&emsp;<a href="contact.html" > Contact Us</a>&emsp;&emsp;<a href="signin.php"> Sign in </a>
</div>
<br><br><br><br><br>

<h1> Register here for exciting offers!! </h1>
<div class="for" >
<h1> Login here </h1>
<form action="validation.php" method="post">

username : <input type="text" name="username" class="form-control" required><br><br>
password : <input type="password" name="password" class="form-control" required><br><br>
<button type="submit" class="btn btn-primary" >login</button><br><br>
(register before loging in)<br>
<button type="button" onclick="window.location.href = 'registration.php';"> register </button><br><br><br>
</form>
</div><br><br><br><br><br><br><br>











































<div class="table">
<hr>
<table>
<tr>

<th>&emsp;&emsp;&emsp; <u>QUICK LINKS </u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
<th>&emsp;&emsp;&emsp;<u> ROOMS </u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
<th>&emsp;<u> CONTACT US </u> </th>
<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u> FOLLOW US </u> </th>





</tr>
<tr>
<td>

<ul>
<li><a href="about.html">About</a> </li><br>
<li><a href="rooms.html">Rooms</a></li><br>
<li><a href="dining.html">dinings</a> </li><br>
<li><a href="amenties.html">Amenities</a></li><br>

</ul>


<!-- second table -->
</td>
<td>
<ul>
<li><a href="rooms.html">Standard rooms</a></li><br>
<li><a href="rooms.html">Business rooms</a></li><br>
<li><a href="rooms.html">Executive rooms</a></li><br>
<li><a href="rooms.html">Deluxe rooms</a></li><br>

</ul>




</td>
</td>
<td>
<ul>
<li>No : 24 , pooram prakasam street </li><br>
<li>royapettah , chennai : 14 </li><br>
<li>mobile : 044-24981414</li><br>
<li>phone  : 9962149554</li><br>

</ul>
</td>


<td>
<ul id="inline">
<li>&emsp;&emsp;&emsp;&emsp;<img src="../images/44.png" alt="facebook" ></li>
<li> <img src="../images/45.png" alt="image"></li>
<li><img src="../images/46.png" alt="image" ></li>
</ul>
</td>


</tr>
</table>
</div>


</body>
</html>






