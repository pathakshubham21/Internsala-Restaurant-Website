<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="color.png">
	<div class="container">
		<div class="img">
			<img src="main.svg">
		</div>
		<div class="login-content">
			<form action="register_r_check.php" method="POST">
				<img src="new.svg">
				<h2 class="title">Restaurant Register</h2>
                           
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
                           
           		   		<input type="text" class="input" name="un" required>
           		   </div>
           		</div>

                       <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-address-book"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
                           
           		   		<input type="text" class="input" name="nm" required>
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="pw1" required>
            	   </div>
            	</div>
                           <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm Password</h5>
           		    	<input type="password" class="input" name="pw2" required>
            	   </div>
            	</div>



            	<input type="submit" class="btn" value="Register">
<br><br><br><br>
            </form>
        </div>
    </div>
    
    <script type="text/javascript" src="main.js"></script>

</body>
</html>
