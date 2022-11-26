<?php  
include 'database.php';

$sql = "SELECT * FROM myusers";
$query = mysqli_query($conn, $sql);
$allusers = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD App Users</title>
</head>
<body>

	<table border="1">
		<tr>
			<th>UserID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Options</th>
		</tr>

		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['userid']; ?></td>
				<td><?php echo $userdata['first_name']; ?></td>
				<td><?php echo $userdata['last_name']; ?></td>
				<td><?php echo $userdata['email']; ?></td>
				<td><?php echo $userdata['city_name']; ?></td>
				<td>
					<a href="update.php?id=<?php echo $userdata['userid']; ?>">Update</a>
					<a href="delete.php?id=<?php echo $userdata['userid']; ?>">Delete</a>
				</td>
			</tr>
		<?php
		}
		?>


	</table>
</body>
</html>