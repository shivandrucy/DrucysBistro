<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update1'])) {
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$image = $_POST['image'];
        $code=$_POST['code'];
		

		// write the update query
		$sql = "UPDATE `menu` SET `name`='$name',`price`='$price',`image`='$image',`code`='$code' WHERE `id`='$id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `menu` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
		$name = $row['name'];
		$price = $row['price'];
		$image = $row['image'];
        $code=$row['code'];
			$id = $row['id'];
		}

	?>
	   <link rel="stylesheet" href="update.css"
	   
		<h2></h2>
		<form class="form-box" action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    Food item name:<br>
		    <input type="text" name="Food item name" value="<?php echo $name; ?>">
		    <input type="hidden" name="id" value="<?php echo $id; ?>">
		    <br>
		    Food price:<br>
		    <input type="text" name="Food price" value="<?php echo $price; ?>">
		    <br>
		     Food image:<br>
		    <input type="text" name="image" value="<?php echo $image; ?>">
		    <br>
		      Food code:<br>
		    <input type="text" name="Food code" value="<?php echo $code; ?>">
		    <br>
		    
		    <br><br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: ViewMenu.php');
	}

}
?>