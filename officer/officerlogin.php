<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html>
<head>
<?php include('officerloginaction.php')?>
	<title>Complaint Airasia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<style>
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #da4646;
	text-align: center;
	border: 1px solid #e35300;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 5px;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: rgb(246, 17, 17);
	background: #e83408;
	border: none;
	border-radius: 5px;
}
</style>

	<div class="header">
		<h2>Login: Officer</h2>
	</div>
	<form method="post" action="officerlogin.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"required>
		</div>
		<div class="w3-container">
		<button class="w3-button w3-red w3-round-large" name="login_officer" >Login</button>
		</div>
		
	</form>
</body>
</html>
</body>
</html>