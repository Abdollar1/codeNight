<?php  
require_once("database.php");

$sql = "select * from students";
$querys = mysqli_query($conn, $sql);
$allusers= mysqli_fetch_all($querys, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>student</title>
     <link rel="stylesheet" href="table.css">
</head>
<body>
                <h2 style="text-align: center; color:white">new member added successfully</h2>
	<table class="show" border="1"  height="300px" widht="300px"  border="1" >
		<tr>
			<th>STUDENT_ID</th>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>GENDER</th>
            <th>PROGRAMME_ID</th>
			<th>ELECTIVE</th>
            <th>CENTRE</th>
			<th colspan="2">OPTIONS</th>
		</tr>
 
		<?php  
		foreach ($allusers as $userdata) {
		?>
			<tr>
				<td><?php echo $userdata['studentId']; ?></td>
				<td><?php echo $userdata['FirstName']; ?></td>
				<td><?php echo $userdata['LastName']; ?></td>
				<td><?php echo $userdata['Gender']; ?></td>
				<td><?php echo $userdata['ProgrammeID']; ?></td>
                <td><?php echo $userdata['Electives']; ?></td>
                <td><?php echo $userdata['Centre']; ?></td>
                
					<td><a class="hr" href="updatestudent.php?id=<?php echo $userdata['studentId']; ?>">Update</a></td>
					<td><a class="hr" href="delete.php?del=<?php echo $userdata['studentId']; ?>">Delete</a></td>
                   
                
				 
			</tr>
		<?php
		}
		?>

    
	</table>
     <a class="add" href="students.php">Add New Student</a>

	 <br>
	 <br>
	 <a class="add" href="home.php">main menu</a>
</body>
</html>