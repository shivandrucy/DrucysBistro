<?php

//session_start();
require("functions.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Responsive Admin Dashboard</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="truth.css">
	</head>

	<body>
		<div class="container">
			<div class="navigation">
				<ul>
					<li>
					<a href="#">	
						<span class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
						<span class="title"><h2>Drucy's Bistro</h2></span>
					</a>
					</li>
					<li>
					<a href="#">
						<span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
						<span class="title">Dashboard</span>
					</a>
					</li>
					<li>
					<a href="view.php">
						<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
						<span class="title">Customers</span>
					</a>
					</li>
					<li>
					<a href="ViewMenu.php">
						<span class="icon"><i class="fa fa-coffee" aria-hidden="true"></i></span>
						<span class="title">Menu items</span>
					</a>
					</li>
					<li>
					<a href="ViewOrders.php">
						<span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
						<span class="title">Orders</span>
					</a>
					</li>
					<li>
					<a href="index.php">
						<span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i>
</span>
						<span class="title">Pie charts</span>
					</a>
					</li>
					<li>
					<a href="logout.php">

						<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
						<span class="title">Sign Out</span>
					</a>
					</li>
					
				</ul>
			</div>
		</div>

	<div class="main">
		<div class="topbar">
			<div class="toggle" onclick="toggleMenu();">
			</div>
			<div class="search">
				<label>
					<input type="text" placeholder="search here">
					<i class="fa fa-search" aria-hidden="true"></i>
				</label>
			</div>
			<span style="color: red; font-size: 60px; font-family:'Brush Script MT', cursive;"><?php echo $_SESSION["chooseusername"]?></span>
				<div class="user">
					>
					<img src="user.PNG">
				
			</div>
			




		</div>
		<div class="cardBox">
				<div class="card">
					<div>
						<div class="numbers">1,042</div>
						<div class="cardName">Daily Views</div>
					</div>
					<div class="iconBox">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</div>
				</div>

				<div class="card">
					<div>
						<div class="numbers">80</div>
						<div class="cardName">Sales</div>
					</div>
					<div class="iconBox">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
				</div>

				<div class="card">
					<div>
						<div class="numbers">200</div>
						<div class="cardName">Comments</div>
					</div>
					<div class="iconBox">
						<i class="fa fa-comments" aria-hidden="true"></i>
					</div>
				</div>

				<div class="card">
					<div>
						<div class="numbers">Ksh.500,000</div>
						<div class="cardName">Earnings</div>
					</div>
					<div class="iconBox">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
				</div>



			</div>

			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<h2>Recent orders</h2>
						<a href="#" class="btn">View All</a>
					</div>
					<table>
						<thead>
							<tr>
							<td>Name</td>
							<td>Price</td>
							<td>Payment</td>
							<td>Status</td>	
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Pizza Pepperoni</td>
								<td>Kshs.800</td>
								<td>Paid</td>
								<td><span class="status return">return</span></td>
							</tr>
							<tr>
								<td>Pizza Magherita</td>
								<td>Kshs.1600</td>
								<td>Paid</td>
								<td><span class="status return">return</span></td>
							</tr>
							<tr>
								<td>Milkshake</td>
								<td>Kshs.800</td>
								<td>Paid</td>
								<td><span class="status delivered">Delivered</span></td>
							</tr>
							<tr>
								<td>Cocktail</td>
								<td>Kshs.550</td>
								<td>Paid</td>
								<td><span class="status inprogress">In progress</span></td>
							</tr>
							<tr>
								<td>Pizza Cheese dip</td>
								<td>Kshs.800</td>
								<td>Paid</td>
								<td><span class="status inprogress">In progress</span></td>
							</tr>
							<tr>
								<td>Fried Chicken Burger</td>
								<td>Kshs.850</td>
								<td>Paid</td>
								<td><span class="status inprogress">In progress</span></td>
							</tr>
							<tr>
								<td>Drucy's Smokin' patty</td>
								<td>Kshs.850</td>
								<td>Paid</td>
								<td><span class="status pending">pending</span></td>
							</tr>
							<tr>
								<td>Pizza Cheese dip</td>
								<td>Kshs.800</td>
								<td>Paid</td>
								<td><span class="status inprogress">In progress</span></td>
							</tr>
							<tr>
								<td>Pizza Pepperoni</td>
								<td>Kshs.800</td>
								<td>Paid</td>
								<td><span class="status return">return</span></td>
							</tr>
							<tr>
								<td>Fried Chicken Burger</td>
								<td>Kshs.850</td>
								<td>Paid</td>
								<td><span class="status inprogress">In progress</span></td>
							</tr>
						</tbody>
					</table>
					</div>
				<div class="recentCustomers">
						<div class="cardHeader">
						<h2>Recent customers</h2>
						
					</div>
					<table>
						<tbody>
							<tr>
								<td width="60px"><div class="imgBx"><img src="users.PNG"></div></td>
								<td><h4>Jo Wilson<br><span>karev</span></h4></td>
							</tr>
							<tr>
								<td width="60px"><div class="imgBx"><img src="cap1.PNG"></div></td>
								<td><h4>Mike Ross<br><span>rossy</span></h4></td>
							</tr>
							<tr>
								<td width="60px"><div class="imgBx"><img src="cap2.PNG"></div></td>
								<td><h4>Hello Kitty<br><span>kitty45</span></h4></td>
							</tr>
							<tr>
								<td width="60px"><div class="imgBx"><img src="cap3.PNG"></div></td>
								<td><h4>Andrew De Luca<br><span>De luca</span></h4></td>
							</tr>
							<tr>
								<td width="60px"><div class="imgBx"><img src="cap4.PNG"></div></td>
								<td><h4>Aria Montgomery<br><span>aria1</span></h4></td>
							</tr>
							<tr>
								<td width="60px"><div class="imgBx"><img src="cap5.PNG"></div></td>
								<td><h4>Spencer Hastings<br><span>spencer</span></h4></td>
							</tr>
						</tbody>
					</table>
					</div>
			</div>
	</div>	

</div>

<script>
	function toggleMenu(){
		let toggle= document.querySelector('.toggle');
		let navigation= document.querySelector('.navigation');
		let main= document.querySelector('.main');
		toggle.classList.toggle('active')
		navigation.classList.toggle('active')
		main.classList.toggle('active')


	}
</script>



















	</body>
</html>