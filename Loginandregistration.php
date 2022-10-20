 <DOCTYPE.html>
<DOCTYPE.html>
<html>
 <head>
       <meta charset="utf-8">
	   <title>Login$Register</title>
	   <link rel="stylesheet" href="Drucy's.css"
 </head>


<body>
 
    <div id="pages" class="four">
		   <ul>
	       <a href="Drucy's.php"><li>HOME</li></a>
		   <a href="new_menu.php"><li>MENU</li></a>
		   <a href="Aboutdrucy.php"><li>ABOUT US</li></a>
		   <a href="Contactdrucy.php"><li>CONTACT US</li></a>
		   <a href="tiya.php"><li>ORDER NOW</li></a>
		   <a href="Loginandregistration.php"><li>LOGIN/REGISTER</li></a>
		   

		   </ul>
		   </div>
		</p>
 
 
 <div class="form-box">
 	          <form action="conne.php" method="post">
               <div class="button-box">
			       <div id="btn"></div>
			       <button type="button" class="toggle-btn" onclick="login()">Log in </button>
			       <button type="button" class="toggle-btn" onclick="register()">Register </button>
			      
			   </div>
			</form>
			   <form id="login" class="input-group1" action="login.php" method="POST">
			        <input type="text" class="input-field" placeholder="User Name" name="username" required>
					<input type="password" class="input-field" placeholder="Enter Password" name="password" required>
					<input type="checkbox" class="check-box" <span>Remember Password</span>
					<button type="submit" class="submit-btn">Log In</button>
					
             </form>

			   <form id="register" class="input-group" action="conne.php" method="post">
			        <input type="text" class="input-field" placeholder="Full names" name="fullnames" required> 
					<input type="text" class="input-field" placeholder="Choose username" name="chooseusername"required>
					<input type="email" class="input-field" placeholder="Email address" name="emailaddress"required>
					
					<input type="text" class="input-field" placeholder="Enter Password" name="enterpassword"required><br><br>
					
					 <label for="male">Male</label>
	                <input type="radio"id ="male" name="gender" value="m">
	                <label for="female">Female: </label>
	                <input type="radio"id ="female" name="gender" value="f"><br>
					<input type="checkbox" class="check-box" <span>I agree to the terms and conditions</span>
					<button type="submit" class="submit-btn">Register</button>
			   </form>

			   





           </div>
		   
		   <script>
		     var x=document.getElementById("login");
			 var y=document.getElementById("register");
			 var z=document.getElementById("btn");
			 
			 function register(){
			   x.style.left="-400px";
			   y.style.left="50px";
			   z.style.left="110px";
			 }

			 function login(){
			   x.style.left="50px";
			   y.style.left="450px";
			   z.style.left="0";
			}


		   </script>
</body>

</html>