<!-- <?php
include('login.php'); // Memasuk-kan skrip Login 

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?> -->

<!DOCTYPE html>
<html>
  <head>
    <title>shdih</title>
	<!-- Skrip CSS -->
   <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>	
  <body>
	<form id="login" method="post">
	    <h1>Log In</h1>
	    <fieldset id="inputs">
	        <input id="username" type="text" placeholder="Username" autofocus required>   
	        <input id="password" type="password" placeholder="Password" required>
	    </fieldset>
	    <fieldset id="actions">
	        <input type="submit" id="submit" value="Log in">
	        <a href="">Forgot your password?</a><a href="">Register</a>
	    </fieldset>
	</form>
  </body>
</html>
	<!-- <div class="container">
		<div class="main">
	      <form action="" method="post">
			<h2>WELCOME</h2><hr/>		
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
		  </form>
		</div>
   </div> -->







