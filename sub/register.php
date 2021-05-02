<?php
session_start();



$con = mysqli_connect('localhost' , 'root' ,'' );
mysqli_select_db($con , 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$success ="";
$error="";


$s = "select * from usertable where name = '$name' " ;
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num==1)
{   
	echo '<script type="text/javascript"> alert("username already taken") </script>';
}
else{
	
	$reg = "insert into usertable(name , password) values ('$name' , '$pass')" ;  
	mysqli_query($con , $reg);
	echo '<script type="text/javascript">    alert("registration successful you can login now!!!") </script>';
	
}

?>