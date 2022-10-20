<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM menu";

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
	<title>View menu Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h2>Menu items</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Food Name</th>
		<th>Food Price</th>
		<th>Food Image</th>
		<th>Food code</th>
		<th>Action</th>
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
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><?php echo $row['image']; ?></td>
					<td><?php echo $row['code']; ?></td>
					<td><a class="btn btn-info" href="update1.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete1.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
		<td><a class="btn btn-info" href="update_food.php">Add new food item</a></td>

		</tr>	

	        	
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