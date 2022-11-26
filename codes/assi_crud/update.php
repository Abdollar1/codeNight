<?php  
include 'database.php';

$userid = $_GET['id'];
$sql = "SELECT * FROM myusers WHERE userid= '$userid' ";
$query = mysqli_query($conn, $sql);
$userdata = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD App</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="main">
		<form method="post" action="processupdate.php?id=<?php echo $userid ?>">
			<h1>Update User info for <?php echo $userdata['first_name'] ?></h1>
			<div class="input-group input-group-2">
				<input type="text" name="first_name" placeholder="First Name" value="<?php echo $userdata['first_name'] ?>">
				<input type="text" name="last_name" placeholder="Last Name"  value="<?php echo $userdata['last_name'] ?>">
			</div>

			<div class="input-group">
				<input type="text" name="email" placeholder="Email"  value="<?php echo $userdata['email'] ?>">
			</div>

			<div class="input-group">
				<input type="text" name="city" placeholder="City"  value="<?php echo $userdata['city_name'] ?>">
			</div>

			<div class="input-group">
				<button type="submit">Update User</button>
			</div>
		</form>
	</div>
</body>
</html>