<!DOCTYPE html>
<html>
<head>
	<title>Update Food</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="update.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<h2 class="title">ADD FOOD</h2>
		
	</header>
	
<div class="form-box">
  <form action="meg.php" method="post">
    <div class="form-group">
     <label for="name">Food Name:</label>
	<input type="text" name="name" required="true" placeholder="Food Item Name"> <br> <br>
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
	<input type="number" name="price" required="true"> <br> <br>
      </label>
	  </div>
	   <div class="form-group">
      <label for="image">Image:</label>
	<input type="file" name="image" required="true"> <br> <br>
    </div>
	  <div class="form-group">
      <label for="code">Code:</label>
	<input type="text" name="code" required="true"> <br> <br>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
</body>
</html>






