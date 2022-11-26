<!DOCTYPE html>
<html>
<head>
	<title>CRUD App</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="main">
			<h3>Insert a user here </h3>
		<form method="post" action="insert.php">
			<div class="input-group input-group-2">
				<input type="text" name="first_name" placeholder="First Name">
				<input type="text" name="last_name" placeholder="Last Name">
			</div>

			<div class="input-group">
				<input type="text" name="email" placeholder="Email">
			</div>

			<div class="input-group">
				<input type="text" name="city" placeholder="City">
			</div>

			<div class="input-group">
				<button type="submit">Add User</button>
			</div>
		</form>
	</div>
</body>
</html>