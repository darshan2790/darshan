<?php include('artserver100.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="stylemodify.css">
</head>
<body>
	<div class="header">
		<h2>ArtRegister</h2>
	</div>
	
	<form method="post" action="artregister100.php">

		<?php include('arterror100.php'); ?>

		<div class="input-group">
			<label>Artname</label>
			<input type="text" name="artname" value="<?php echo $artname; ?>">
		</div>
		<div class="input-group">
			<label>Cost</label>
			<input type="cost" name="cost" value="<?php echo $cost; ?>">
		</div>
		
		<div class="input-group">
			<label>Category</label>
			<input type="category" name="category" value="<?php echo $category; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="artlogin100.php">Sign in</a>
		</p>
	</form>
</body>
</html>
 