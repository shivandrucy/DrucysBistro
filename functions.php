<?php
require("login.php");

function getUsersData($id){
	$array=array();


	$query=("SELECT * FROM `registration` WHERE `id` = '.$id'");

	while($row=mysql_fetch_assoc($query))
	{
		$array['id']=$row['id'];
        $array['fullnames']=$row['fullnames'];
        $array['chooseusername']=$row['chooseusername'];
        $array['emailaddress']=$row['emailaddress'];
        $array['enterpassword']=$row['enterpassword'];
        $array['gender']=$row['gender'];

	}
	return $array;
}
function getid($username){
	$query=mysql_query("SELECT `id` FROM `registration` WHERE `username`='$username'");

	while($row=mysql_fetch_assoc($query)){
		return $row['id'];
	}
}


?>