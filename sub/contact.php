<?php
session_start();


$con = mysqli_connect('localhost' , 'root' ,'' );
mysqli_select_db($con , 'contactdetails');
$name = $_POST['name'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$meg = $_POST['text'];


$s = "select * from contacts where email = '$email' " ;
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num==1)
{   
	echo '<script type="text/javascript"> alert("you have already submitted your request . we will get back to you shortly") </script>';
}
else{
	
	$reg = "insert into contacts(name ,city , phone , email , message) values ('$name' , '$city' , '$phone' , '$email' , '$meg')" ;  
	mysqli_query($con , $reg);
	echo '<script type="text/javascript"> alert("Thank you !! we will get back to you shortly") </script>';
	 
}