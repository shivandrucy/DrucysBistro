<?php
    $host="localhost";
	$user="Shivan";
	$password="Druscilla@157";
	$db="foodweb";

session_start();


$data=mysqli_connect($host,$user,$password,$db);
if($data===false)

{

	die("connection error");

}


if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$username=$_POST["username"];

	$password=$_POST["password"];



    $sql="select * from registration where chooseusername='".$username."' AND enterpassword='".$password."' ";

   
    $result=mysqli_query($data,$sql);


    $row=mysqli_fetch_array($result);



	if($row["usertype"]=="customer")
	{
		$_SESSION["chooseusername"]=$username;

		header("location:hym.php");

	}
	elseif($row["usertype"]=="admin")
	{
               $_SESSION["chooseusername"]=$username;

               header("location:Admin.php");
	}
	else
	{
		echo "username or password incorrect";
	}







}





?>