<?php

$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];
$code=$_POST['code'];

//database connection
$conn = new mysqli("localhost","Shivan","Druscilla@157","foodweb" );
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into menu(name,price,image,code) values(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$price,$image,$code);
	$stmt->execute();
	echo "registration successful";
	$stmt->close();
	
}




