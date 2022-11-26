4?php  
require_once("connection.php");

$sql = "select * from new_student";
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
			<th>student_id</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Date_of_admittance</th>
            <th>Name_of_guider</th>
            <th>Guider_number</th>
            <th>Residing</th>
            <th>House_number</th>
           
			<th colspan="3">Options</th>
		</tr>
 
		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['student_id']; ?></td>
				<td><?php echo $userdata['First_name']; ?></td>
				<td><?php echo $userdata['Middle_name']; ?></td>
				<td><?php echo $userdata['Last_name']; ?></td>
				<td><?php echo $userdata['Age']; ?></td>
				<td><?php echo $userdata['Gender']; ?></td>
				<td><?php echo $userdata['Class']; ?></td>
				<td><?php echo $userdata['Date_of_admittance']; ?></td>
				<td><?php echo $userdata['Name_of_guider']; ?></td>
				<td><?php echo $userdata['Guider_number']; ?></td>
				<td><?php echo $userdata['Residing']; ?></td>
				<td><?php echo $userdata['House_number']; ?></td>
				 
					<td><a class="hr" href="update.php?id=<?php echo $userdata['student_id']; ?>">Update</a></td>
					<td><a class="hr" href="delete.php?del=<?php echo $userdata['student_id']; ?>">Delete</a></td>
                    <td><a class="hr"  href="view.php?view=<?php echo $userdata['student_id']; ?>">View</a></td>
                
				 
			</tr>
		<?php
		}
		?>

    
	</table>
     <a class="add" href="insert.php">Add New Record</a>
</body>
</html>