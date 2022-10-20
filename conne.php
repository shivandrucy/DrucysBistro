<?php

$fullnames=$_POST['fullnames'];
$chooseusername=$_POST['chooseusername'];
$emailaddress=$_POST['emailaddress'];
$enterpassword=$_POST['enterpassword'];
$gender=$_POST['gender'];

//database connection
$conn = new mysqli("localhost","Shivan","Druscilla@157","foodweb" );
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into Registration(fullnames,chooseusername,emailaddress,enterpassword,gender) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$fullnames,$chooseusername,$emailaddress,$enterpassword,$gender);
	$stmt->execute();
	echo "registration successful";
	$stmt->close();
	
}

























?>