<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM orders";

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
      <title>View orders Page</title>
       <!-- to make it looking good im using bootstrap -->
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

      <div class="container">
            <h2>Orders Made</h2>
<table class="table">
      <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email address</th>
            <th>Phone number</th>
            <th>Payment mode</th>
            <th>Products</th>
            <th>Amount paid</th>

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
                              <td><?php echo $row['chooseusername']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['phone']; ?></td>
                              <td><?php echo $row['pmode']; ?></td>
                              <td><?php echo $row['products']; ?></td>
                              <td><?php echo $row['amount_paid']; ?></td>
                              
                              </tr> 
                              
            <?php       }
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