<?php

//session_start();
require("functions.php");

?>

<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Userhome</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
								<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>.profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(10.PNG);
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh;
    overflow-x: hidden
}</style>

                                </head>
								<a href="logout.php" class="btn btn-outline-dark btn-sm btn-block"><b><span style="font-size:15px;color:red">Logout</span></b></a>
								<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-hover-opacity-off" id="myNavbar">
    <a href="Drucy's.php" class="w3-bar-item w3-button">HOME</a>
    <a href="new_menu.php" class="w3-bar-item w3-button">MENU</a>
    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
     <a href="Loginandregistration.php" class="w3-bar-item w3-button">LOGIN/REGISTER</a>
     <span style="margin-left:370px;top: 40px;font-size: 20px;"><span class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp <?php echo $_SESSION["chooseusername"] ?></span><a href="logout.php" class="btn btn-outline-dark "><b><span style="font-size:25px;color:white">Logout</span></b></a>
  </div>
</div>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src= user.PNG alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="logout.php" class="btn btn-outline-dark btn-sm btn-block"><b><span style="font-size:15px;color:red">Logout</span></b></a></div>   
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"><?php echo $_SESSION["chooseusername"] ?></h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                    </div>
                </div>
            </div>
			
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Profile details</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                   <?php 
include "config.php";

//write the query to get data from users table

//$sql = "SELECT username, email FROM registration";
$sql = "SELECT id,gender, fullnames,chooseusername, emailaddress FROM registration WHERE `chooseusername` = '".$_SESSION['chooseusername']."'";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>

<head><style>

</style>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>


	
<table class="table">
	<thead>
		<tr>
		
		<th>Full Names</th>
		<th>Username</th>
		<th>Email Address</th>
		<th>Gender</th>
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
					
					<td><?php echo $row['fullnames']; ?></td>
					<td><?php echo $row['chooseusername']; ?></td>
					<td><?php echo $row['emailaddress']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp</td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
</div>
<?php  
                  if(isset($_SESSION['username']))
                  {
                  $usersData= getUsersData(getid($_SESSION['username'])) ;
                   echo $usersData['fullnames'];
                  }

                 
              ?>
              	
</div>
   <!DOCTYPE html>

<head><style>

</style>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>


	


</body>

</html>
</div>


</div>



</body>

</html>
	

	<div class="px-4 py-3">
                <h5 class="mb-0"></h5>
                <div class="p-4 rounded shadow-sm bg-light">
                  

<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT chooseusername,pmode,products,address,amount_paid FROM orders WHERE `chooseusername` = '".$_SESSION['chooseusername']."'";

//execute the query

$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
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
            
            <th>Name</th>
            <th>Items bought</th>
            <th>Amount paid</th>
			<th>Payment mode</th>
			<th>Address</th>

      </tr>
      </thead>
      <tbody>     
            <?php

                  if ($result->num_rows > 0) {
                        //output data of each row
                        while ($row = $result->fetch_assoc()) {
            ?>

                              <tr>
                              
                              <td><?php echo $row['chooseusername']; ?></td>
                              <td><?php echo $row['products']; ?></td>
                              <td><?php echo $row['amount_paid']; ?></td>
							  <td><?php echo $row['pmode']; ?></td>
							  <td><?php echo $row['address']; ?></td>
                              
                              </tr> 
                              
            <?php       }
                  }
            ?>
                  
      </tbody>
</table>
      </div>

</body>
</html>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
				
                    
                </div>
                <div class="row">
                   
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
            </div>
        </div>
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                                </body>
                            </html>