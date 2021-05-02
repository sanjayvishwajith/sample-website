<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbconnect.php");
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO user (fname, lname, email) VALUES ('$fname','$lname','$email')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");