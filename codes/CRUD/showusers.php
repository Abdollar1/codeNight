<?php  
require_once("database.php");

$sql = "select * from mydata";
$querys = mysqli_query($conn, $sql);
$allusers= mysqli_fetch_all($querys, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
     <link rel="stylesheet" href="table.css">
</head>
<body>
                <h2 style="text-align: center; color:white">new member added successfully</h2>
	<table class="show" border="1" height="300px" widht="300px" border="1px">
		<tr>
			<th>UserID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>City</th>
			<th colspan="3">Options</th>
		</tr>
 
		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['id']; ?></td>
				<td><?php echo $userdata['firstname']; ?></td>
				<td><?php echo $userdata['lastname']; ?></td>
				<td><?php echo $userdata['email']; ?></td>
				<td><?php echo $userdata['city_name']; ?></td>
				 
					<td><a class="hr" href="update.php?id=<?php echo $userdata['id']; ?>">Update</a></td>
					<td><a class="hr" href="delete.php?del=<?php echo $userdata['id']; ?>">Delete</a></td>
                    <td><a class="hr"  href="view.php?view=<?php echo $userdata['id']; ?>">View</a></td>
                
				 
			</tr>
		<?php
		}
		?>

    
	</table>
     <a class="add" href="insert.php">Add New Record</a>
</body>
</html>