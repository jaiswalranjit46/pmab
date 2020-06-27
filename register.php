<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php"enctype="multipart/form-data" autocomplete="off">

		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Contact No</label>
			<input type="number_format" name="contact" value="<?php echo $contact; ?>">
		</div>
		<div class="input-group">
			<label>Address1</label>
			<input type="text" name="address1" value="<?php echo $address1; ?>">
		</div>
		<div class="input-group">
			<label>Address2</label>
			<input type="text" name="address2" value="<?php echo $address2; ?>">
		</div>
		<div class="input-group">
			<label>Upload Profile</label>
			<input type="file" name="avatar" accept="image/*" required />
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>