<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		
		$id = $_POST['id'];
		$fullnames = $_POST['fullnames'];
		$chooseusername = $_POST['chooseusername'];
		$emailaddress = $_POST['emailaddress'];
                $enterpassword=$_POST['enterpassword'];
		$gender = $_POST['gender'];

		// write the update query
		$sql = "UPDATE `registration` SET `fullnames`='$fullnames',`chooseusername`='$chooseusername',`emailaddress`='$emailaddress',`enterpassword`='$enterpassword',`gender`='$gender' WHERE `id`='$id'";

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
	$sql = "SELECT * FROM `registration` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$fullnames = $row['fullnames'];
			$chooseusername = $row['chooseusername'];
			$emailaddress = $row['emailaddress'];
			$enterpassword=$row['enterpassword'];
			$gender = $row['gender'];
			$id = $row['id'];
		}

	?>
	   <link rel="stylesheet" href="update.css"
	   
		<h2></h2>
		<form class="form-box" action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    First name:<br>
		    <input type="text" name="fullnames" value="<?php echo $fullnames; ?>">
		    <input type="hidden" name="id" value="<?php echo $id; ?>">
		    <br>
		    Last name:<br>
		    <input type="text" name="chooseusername" value="<?php echo $chooseusername; ?>">
		    <br>
		    Email:<br>
		    <input type="email" name="emailaddress" value="<?php echo $emailaddress; ?>">
		    <br>
		    Password:<br>
		    <input type="password" name="enterpassword" value="<?php echo $enterpassword; ?>">
		    <br>
		    Gender:<br>
		    <input type="radio" name="gender" value="m" <?php if($gender == 'm'){ echo "checked";} ?> >Male
		    <input type="radio" name="gender" value="f" <?php if($gender == 'f'){ echo "checked";} ?>>Female
		    <br><br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>