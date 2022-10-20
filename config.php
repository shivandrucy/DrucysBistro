<?php
    $conn=new mysqli("localhost","Shivan","Druscilla@157","foodweb");
    if($conn->connect_error){
    	die("Connection Failed".$conn->connect_error);
    }
?>