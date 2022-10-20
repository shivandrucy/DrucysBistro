<?php

//session_start();
require("functions.php");

?>
<!DOCTYPE html>

<html>

<head>

	<title></title>
	 <link rel="stylesheet" href="welcome.css?v=<?php echo time(); ?>">

</head>

<body>

 





<div class="when">
<h1><?php echo $_SESSION["chooseusername"] ?>,Welcome to the customer home page</h1><br>


<a href="logout.php">Logout</a>

<div id="user" class="five">
          <h3><?php echo $_SESSION["chooseusername"] ?></h3><br>
		  <img src=" user.PNG" alt="HTML logo" style="width:150px;height:150px;">
</div>

</div><br><br>

<div class="form-box">
	
	<div class="a"><h2>Profile details</h2>
		
	<div class="b"><h2>User details</h2></div>
  <div class="c">






<?php 
include "config.php";

//write the query to get data from users table

//$sql = "SELECT username, email FROM registration";
$sql = "SELECT id,gender, fullnames,chooseusername, emailaddress FROM registration WHERE `chooseusername` = '".$_SESSION['chooseusername']."'";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head><style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 66px;
  text-decoration: none;
}

.pagination a.active {
  background-color: maroon;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h2>Users</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Full Names</th>
		<th>Username</th>
		<th>Email Address</th>
		<th>Gender</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['fullnames']; ?></td>
					<td><?php echo $row['chooseusername']; ?></td>
					<td><?php echo $row['emailaddress']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</body>
</html>

  


  	<?php  
                  if(isset($_SESSION['username']))
                  {
                  $usersData= getUsersData(getid($_SESSION['username'])) ;
                   echo $usersData['fullnames'];
                  }

                 
              ?>
              	
   </div>
</div>
</div>

</body>

</html>