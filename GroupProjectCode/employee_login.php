<!DOCTYPE html>
<html>
  <head>
	<title>About Us</title>
	<br><br><br><br>
	<link rel="stylesheet" href="empStyle/empstyle.css">
	<style>
	.back_button{
    display: block;
    margin: 0 auto;
    width: 60px;
    height: 40px;
    border: none;
    background-color: green;
    font-family: arial;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
	}
	</style>

  </head>
  <body>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Employee Login</h2>
		<form class="signup-form" action="emp_index.html" method="POST">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign In</button>
			
		</form><br>
		<input class="back_button" type="button" value="Back" onclick="history.back()">
	</div>
</section>

  </body>
</html>
