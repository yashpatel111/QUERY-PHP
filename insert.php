<?php 
require "config.php";
{
    $user=$_REQUEST['user'];
    $Email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];
    $contact=$_REQUEST['contact'];
}	
    $insert="INSERT INTO `db1`( `user`, `Email`, `pass`, `Contact`) VALUES ('$user',' $Email','$pass','$contact')";

    $result=mysqli_query($con, $insert);
	if ($result)
	header("location:data.php");
	
?>
    